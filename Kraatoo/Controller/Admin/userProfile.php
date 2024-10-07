<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/personal.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/business.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/client.php');
require_once('/opt/lampp/htdocs/Kraatoo/Controller/Admin/operations.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$key = $_SESSION['key'];
$_SESSION['user'] = $_SESSION[$key][searchAllUser($_GET['userId'])];

if ($key == 'allPersonalUser') 
{
    header('location: ../../Views/Admin/Profile/personal.php');
}

else if ($key == 'allBusinessUser') 
{
    header('location: ../../Views/Admin/Profile/business.php');
}

else if ($key == 'allClientUser') 
{
    header('location: ../../Views/Admin/Profile/client.php');
}
