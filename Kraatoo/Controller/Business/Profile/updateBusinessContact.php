<?php
require_once('../../../Entity/business.php');
require_once('../../../Model/business.php');
require_once('../../../Model/contact.php');
require_once('../../../Model/user.php');
require_once('../../../Entity/personal.php');
require_once('../../../Model/Personal.php');
require_once('../../fillUpValue.php');


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function updateCheck ()
{
    $flag = true;
    foreach ($_POST as $key => $value) 
    {
        if (empty($value)) {
            $_SESSION['fillUpErrorBusinessContactInfo'][$key] = "*Can't update empty field";
            $flag = false;
        }
        $_SESSION['fillUpValue'][$key] = $value;
    }
    return $flag;
}


if ($_SESSION['businessContactEditMode']) 
{

    if (isset($_POST['updateBusinessContact']) && updateCheck ())
    {
        
        $contact = new contact($_POST['email'], $_POST['phoneNumber'], $_POST['address']);
        $contact->id = $_SESSION['user']->contact->id;
        $business = new Business();
        

        if (updateUser($_POST['email']) or $_POST['email'] == $_SESSION['user']->contact->email)
        {
            valueAssignBusinessInfoReverse();
            $business->setContact($contact, $_POST['websiteurl']);
            updateContactInfo($business);
            $_SESSION['businessContactEditMode'] = false;
           
        }

        else
        {
             $_SESSION['fillUpErrorBusinessContactInfo']['emailAvailibility'] = '*Email is Already registered';
        }
    
    }

} 
else 
{
    valueAssignBusinessInfo();
    $_SESSION['businessContactEditMode'] = true;
    $_SESSION['businessInfoEditMode'] = false;
    $_SESSION['businessContactPersonEditMode'] = false;
}


header('location: ../../../Views/Business/Profile/Page/profile.php');

?>
