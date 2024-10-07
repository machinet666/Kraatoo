<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/personal.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/business.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/client.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function searchAllUser($userID)
{
    $key = $_SESSION['key'];
    $index = 0;
    foreach ($_SESSION[$key] as $value) 
    {
        if ($value->userID == $userID) {
            return $index;
        }
        $index += 1;
    }
}

function deleteAllUser($userID)
{
    $key = $_SESSION['key'];

    unset($_SESSION[$key][searchAllUser($userID)]);
    $_SESSION[$key] = array_values($_SESSION[$key]);
}
