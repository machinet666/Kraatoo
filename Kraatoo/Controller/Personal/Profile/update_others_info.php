<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/personal.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/Personal.php');
require_once('/opt/lampp/htdocs/Kraatoo/Controller/fillUpValue.php');
// require_once('/opt/lampp/htdocs/Kraatoo/Controller/Personal/Profile/freelancer.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function updateCheckOthersInfo()
{
    $flag = false;
    if ($_SESSION['user']->isAFreelancer) {
        if (freelancer()) {
            $flag = true;
        }
    } else {
        nonFreelancer();
        $flag = true;
    }
    return $flag;
}


function freelancer()
{
    $flag = true;

    foreach ($_POST as $key => $value) {
        if (empty($value) or $value == "N/A" or $value == '1111' or $value == "n/a" or $value == "0") {
            $_SESSION['fillUpErrorFreelancer'][$key] = "*Can't update empty field";
            $flag = false;
        }
        $_SESSION['fillUpValue'][$key] = $value;
    }

    return $flag;
}

function nonFreelancer()
{
    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            $_POST[$key] = 'N/A';
        }
        $_SESSION['fillUpValue'][$key] = $_POST[$key];
    }

    if ($_POST['tin'] == 'N/A') {
        $_POST['tin'] = 1111;
        $_SESSION['fillUpValue']['tin'] = 1111;
    }
}


if ($_SESSION['othersEditMode'] == false) 
{
    valueAssignPersonalInfo();
    $_SESSION['othersEditMode'] = true;
    $_SESSION['personalEditMode'] = false;
    $_SESSION['academicEditMode'] = false;
    $_SESSION['jobEditMode'] = false;
    // header('location: ../../../Views/Personal/Profile/Page/profile.php');

} 

else 
{
    if (isset($_POST['othersInfo']) and updateCheckOthersInfo()) 
    {
        valueAssignPersonalInfoReverse();
        $personal = new personal();
        $personal->setOthersInfo($_SESSION['user']->userID, $_POST['skillList'], $_POST['tin'], $_POST['aboutYourself']);
        updateOthers($personal);
        $_SESSION['othersEditMode'] = false;

        if ($_SESSION['conversion'] and freelancer())
        {
            $personal = new personal($_SESSION['user']->userID);
            updateFreelancer($personal);
            $_SESSION['user']->isAFreelancer = true;
        }

    }

}


header('location: ../../../Views/Personal/Profile/Page/profile.php');
