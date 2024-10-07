<?php
require_once('../../../Entity/client.php');
require_once('../../../Entity/contact.php');
require_once('../../../Model/contact.php');
require_once('../../../Model/user.php');
require_once('../../fillUpValue.php');


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function updateCheckClientInfo()
{
    $flag = true;

    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            $_SESSION['fillUpErrorClientContactInfo'][$key] = "*Can't update empty field";
            $flag = false;
        }
        $_SESSION['fillUpValue'][$key] = $value;
    }
    return $flag;

}


if ($_SESSION['clientContactEditMode']) 
{

    if (isset($_POST['updateClientContactInfo']) && updateCheckClientInfo()) 
    {
        
        $contact = new contact($_POST['email'], $_POST['phoneNumber'], $_POST['address'], $_SESSION['user']->contact->id);

        if (updateUser($_POST['email']) or $_POST['email'] == $_SESSION['user']->contact->email)
        {
            updateContact($contact);
            valueAssignClientInfoReverse();
            $_SESSION['clientContactEditMode'] = false;
        }
        else 
        {
            $_SESSION['fillUpErrorClientContactInfo']['emailAvailibility'] = '*Email is Already registered';
        }
        
    }

} 

else 
{
    valueAssignClientInfo();
    $_SESSION['clientContactEditMode'] = true;
    $_SESSION['clientInfoEditMode'] = false;
    $_SESSION['clientOrganizationEditMode'] = false;
}

header('location: ../../../Views/Client/Profile/Page/profile.php');
