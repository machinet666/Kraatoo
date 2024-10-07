<?php
require_once('/opt/lampp/htdocs/Kraatoo/Model/user.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/client.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/business.php');

if (session_status() == PHP_SESSION_NONE)
    session_start();

$_SESSION['check'] = "open";

$flag = true;

if (isset($_POST['cancel']))
    $_SESSION['check'] = "close";

if (isset($_POST['change'])) 
{
    if (empty($_POST['currentPassword'])) 
    {
        $_SESSION['PasswordErrorCurrent'] = "Can't Update empty field";
        $flag = false;
    } 
    else if ($_SESSION['password'] != $_POST['currentPassword']) 
    {
        $_SESSION['PasswordErrorCurrent'] = "Wrong Password";
        $flag = false;
    }

    if (empty($_POST['newPassword'])) 
    {
        $_SESSION['PasswordErrorNew'] = "Can't Update empty field";
        $flag = false;
    } 
    else if (empty($_POST['confirmNewPassword'])) 
    {
        $_SESSION['PasswordErrorWrong'] = "Can't Update empty field";
        $flag = false;
    } 
    else if ($_POST['newPassword'] != $_POST['confirmNewPassword']) 
    {
        $_SESSION['PasswordErrorWrong'] = "Password didn't match";
        $flag = false;
    }


    if ($flag) 
    {
        $_SESSION['check'] = "close";
        changePassword($_SESSION['user']->userID, $_POST['newPassword']);
        $_SESSION['password'] = $_POST['newPassword'];
    }

}




$type = "";
if (isset($_GET['type']))
    $type = $_GET['type'];
else if (isset($_POST['type']))
    $type = $_POST['type'];


if ($type == "Personal")
    header("location: ../Views/Personal/Profile/Page/profile.php");
else if ($type == "Business")
    header("location: ../Views/Business/Profile/Page/profile.php");
else if ($type == "Client")
    header("location: ../Views/Client/Profile/Page/profile.php");

