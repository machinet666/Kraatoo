<?php
require_once('../../../Entity/personal.php');
require_once('../../../Model/Personal.php');
require_once('../../fillUpValue.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// function updateCheckPersonalInfo ()
// {
//     $flag = true;
//     foreach ($_POST as $key => $value) {
//         if (empty($value) and isset($_SESSION['fillUpErrorPersonal'][$key])) 
//         {
//             $_SESSION['fillUpErrorPersonal'][$key] = "*Can't update empty field";
//             $flag = false;
//         }
//         $_SESSION['fillUpValue'][$key] = $value;
//     }
//     return $flag;
// }

function updateCheckJobInfo ()
{
    $flag = true;
    foreach ($_POST as $key => $value)
    {
        if (empty($value) and isset($_SESSION['fillUpErrorJob'][$key]))
        {
            $_SESSION['fillUpErrorJob'][$key] = "*Can't update empty field";
            $flag = false;
        }
    }
    return $flag;
}

if($_SESSION['jobEditMode'] == false)
{
    valueAssignPersonalInfo();
    $_SESSION['jobEditMode'] = true;
    $_SESSION['personalEditMode'] = false;
    $_SESSION['academicEditMode'] = false;
    $_SESSION['othersEditMode'] = false;
}
else 
{
    valueAssignPersonalInfoReverse();
    $_SESSION['jobEditMode'] = false;
}
header('location: ../../../Views/Personal/Profile/Page/profile.php');
?>