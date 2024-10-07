<?php
require_once('../../../Entity/business.php');
require_once('../../../Model/business.php');
require_once('../../fillUpValue.php');


if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}

function updateCheckBusinessContactPerson()
{
    $flag = true;

    foreach ($_POST as $key => $value) 
    {
        if (empty($value)) 
        {
            $_SESSION['fillUpErrorBusinessPersonalContactInfo'][$key] = "*Can't update empty field";
            $flag = false;
        }
        $_SESSION['fillUpValue'][$key] = $value;
    }
    return $flag;

}

if($_SESSION['businessContactPersonEditMode'])
{

    if (isset($_POST['UpdateContactPerson']) && updateCheckBusinessContactPerson())
    {
        valueAssignBusinessInfoReverse();
        $business = new Business ();
        $business->userID = $_SESSION['user']->userID;
        $business->setContactPerson($_POST['cName'], $_POST['cNumber'], $_POST['cEmail']);
        updatePersonContactInfo($business);

        $_SESSION['businessContactPersonEditMode'] = false;
    }

}
else
{
    valueAssignBusinessInfo();
    $_SESSION['businessContactPersonEditMode'] = true;
    $_SESSION['businessInfoEditMode'] = false;
    $_SESSION['businessContactEditMode'] = false;
}

header ('location: ../../../Views/Business/Profile/Page/profile.php');
