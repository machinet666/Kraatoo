<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}

$_SESSION['logInError'] = '';

header('location: ../../Views/Log%20In/page.php');
?>