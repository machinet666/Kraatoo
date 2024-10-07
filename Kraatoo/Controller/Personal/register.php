<?php
require_once('../../Entity/personal.php');
require_once('../../Entity/person.php');
require_once('../../Entity/user.php');
require_once('../../Model/Personal.php');

$flag = true;
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

foreach ($_POST as $key => $value) {
    if (empty($value) and isset($_SESSION['fillUpError'][$key])) 
    {
        $_SESSION['fillUpError'][$key] = '*Fill this field is mandatory';
        $flag = false;
    }
    $_SESSION['fillUpValue'][$key] = $value;
}



if (!isset($_POST['gender'])) 
{
    $_SESSION['fillUpError']['gender'] = '*Fill this field is mandatory';
    $flag = false;
}

if (!isset($_POST['bachelorDegree'])) {
    $_SESSION['fillUpError']['bachelorDegree'] = '*Fill this field is mandatory';
    $flag = false;
}

if (!isset($_POST['specializedfield'])) {
    $_SESSION['fillUpError']['specializedfield'] = '*Fill this field is mandatory';
    $flag = false;
}

if ($_POST['password'] != $_POST['retypepassword'])
{
    $_SESSION['passwordmatch'] = "*Password didn't match";
    $flag = false;
}

if (isset($_POST['register']) and $flag == true) 
{
    $personal = new personal();
    $personal->firstName = $_POST['firstname'];
    $personal->lastName = $_POST['lastname'];
    if (isset($_POST['gender'])) {
        $personal->gender = $_POST['gender'];
    } else {
        $personal->gender = "";
    }
    $personal->dateOfBirth = date('Y-m-d', strtotime($_POST['dateofbirth']));


    $contact = new contact($_POST['email'], $_POST['phonenumber'], $_POST['address']);
    $personal->contact = $contact;

    if (isset($_POST['bachelorDegree'])) {
        $personal->bachelorDegree = $_POST['bachelorDegree'];
    } else {
        $personal->bachelorDegree = "";
    }

    if ($_POST['mastersDegree'] == '')
    {
        $personal->masterDegree = "N/A";
    }
    else
    {
        $personal->masterDegree = $_POST['mastersDegree'];
    }

    if (isset($_POST['specializedfield'])) {
        $personal->specilizedField = $_POST['specializedfield'];
    } else {
        $personal->specilizedField = "";
    }
    $personal->preferred_position = $_POST['preferredworkposition'];

    

    $user = new user();
    $user->email = $_POST['email'];
    $user->type = "Personal";
    $user->password = $_POST['password'];

    if (insertPersonal($personal, $user)) {
        header('location: ../Redirect/login.php');
    } 
    else 
    {
        $_SESSION['fillUpError']['emailAvailibility'] = "*This Email is already registered";
        header('location: ../../Views/Personal/Registration/page.php');
    }
} 
else {
    header('location: ../../Views/Personal/Registration/page.php');
}
