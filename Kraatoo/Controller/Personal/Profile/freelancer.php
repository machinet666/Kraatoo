<?php
require_once('../../../Model/Personal.php');
// require_once('../../../Controller/Personal/Profile/update_others_info.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


if ($_SESSION['fillUpValue']['skillList'] == "N/A" || $_SESSION['fillUpValue']['tin'] == "1111" || $_SESSION['fillUpValue']['aboutYourself'] == "N/A") 
{
    $_SESSION['freelancerError']  = "*Fill this field to join as a Freelancer";
    // $_SESSION['othersEditMode'] = true;
    $_SESSION['conversion'] = true;
    header('location: update_others_info.php');
} 
else 
{
    $personal = new personal($_SESSION['user']->userID);
    $personal->userID = $_SESSION['user']->userID;
    updateFreelancer($personal);
    $_SESSION['user']->isAFreelancer = true;
    $_SESSION['othersEditMode'] = false;
    header('location: ../../../Views/Personal/Profile/Page/profile.php');
}


