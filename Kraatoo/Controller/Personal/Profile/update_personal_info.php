<?php
require_once('../../../Entity/personal.php');
require_once('../../../Model/contact.php');
require_once('../../../Model/user.php');
require_once('../../../Model/person.php');
require_once('../../fillUpValue.php');


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function updateCheckPersonalInfo ()
{
    $flag = true;
    foreach ($_POST as $key => $value) {
        if (empty($value) and isset($_SESSION['fillUpErrorPersonal'][$key])) 
        {
            $_SESSION['fillUpErrorPersonal'][$key] = "*Can't update empty field";
            $flag = false;
        }
        $_SESSION['fillUpValue'][$key] = $value;
    }
    return $flag;
}


if ($_SESSION['personalEditMode'] == false)
{
    valueAssignPersonalInfo();
    $_SESSION['personalEditMode'] = true;
    $_SESSION['academicEditMode'] = false;
    $_SESSION['jobEditMode'] = false;
    $_SESSION['othersEditMode'] = false;
    
    // header('location: ../../../Views/Personal/Profile/Page/profile.php');
}

else 
{

    if (isset($_POST['personalInfo']) and updateCheckPersonalInfo()) 
    {
        $contact = new contact($_POST['email'], $_POST['phoneNumber'], $_POST['address'], $_SESSION['user']->contact->id);
        $person = new person($_POST['firstName'], $_POST['lastName'], $_POST['gender'], $_POST['dateOfBirth'], $contact, $_SESSION['user']->personID);

        if (updateUser($_POST['email']) or $_POST['email'] == $_SESSION['user']->contact->email) 
        {
            updatePerson($person);
            valueAssignPersonalInfoReverse(); 
            $_SESSION['personalEditMode'] = false;
        } 
        else 
        {
            $_SESSION['fillUpErrorPersonal']['emailAvailibility'] = '*Email is Already registered';
        }
    }
}
header('location: ../../../Views/Personal/Profile/Page/profile.php');
