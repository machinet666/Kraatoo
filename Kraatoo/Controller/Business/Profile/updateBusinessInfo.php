<?php
require_once('../../../Entity/business.php');
require_once('../../../Model/business.php');
require_once('../../fillUpValue.php');

if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}

function updateChecBusinessInfo ()
{
    $flag = true;
    foreach ($_POST as $key => $value) {
        if (empty($value) and isset($_SESSION['fillUpErrorBusinessInfo'][$key])) 
        {
            $_SESSION['fillUpErrorBusinessInfo'][$key] = "*Can't update empty field";
            $flag = false;
        }
        $_SESSION['fillUpValue'][$key] = $value;
    }
    return $flag;

}


if($_SESSION['businessInfoEditMode'])
{
    if(isset($_POST['UpdateBusinessInformation']) && updateChecBusinessInfo())
    {
        valueAssignBusinessInfoReverse();
        $business = new Business($_POST['name'], $_POST['type'], $_POST['tradelicenseno'], $_POST['numberofemployees'], $_POST['yearofestablishment']);
        $business->userID = $_SESSION['user']->userID;
        updateBusiness($business);
        $_SESSION['businessInfoEditMode'] = false;
    }

    header ('location: ../../../Views/Business/Profile/Page/profile.php');
}


else
{
    valueAssignBusinessInfo();
    $_SESSION['businessInfoEditMode'] = true;
    $_SESSION['businessContactEditMode'] = false;
    $_SESSION['businessContactPersonEditMode'] = false;
    header ('location: ../../../../Views/Business/Profile/Page/profile.php');
    
}




?>
