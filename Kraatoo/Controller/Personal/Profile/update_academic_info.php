<?php
require_once('../../../Entity/personal.php');
require_once('../../../Model/Personal.php');
require_once('../../fillUpValue.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


if ($_SESSION['academicEditMode'] == false) 
{
    valueAssignPersonalInfo();
    $_SESSION['academicEditMode'] = true;
    $_SESSION['personalEditMode'] = false;
    $_SESSION['jobEditMode'] = false;
    $_SESSION['othersEditMode'] = false;

    // header('location: ../../../Views/Personal/Profile/Page/profile.php');
} 
else 
{    
    foreach ($_POST as $key => $value) 
    {
        $_SESSION['fillUpValue'][$key] = $value;
    }

    if ($_POST['masterDegree'] == '')
    {
        $_SESSION['fillUpValue']['masterDegree'] = "N/A";     
    }

    if (isset($_POST['academicInfo'])) 
    {
       valueAssignPersonalInfoReverse();
       $personal = new personal ($_POST['bachelorDegree'], $_SESSION['fillUpValue']['masterDegree'] , $_POST['specilizedField'], $_SESSION['user']->userID);
       updateAcademic($personal);
       $_SESSION['academicEditMode'] = false;
    }
}

header('location: ../../../Views/Personal/Profile/Page/profile.php');
