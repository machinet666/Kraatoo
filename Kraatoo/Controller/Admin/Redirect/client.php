<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
$_SESSION['key'] = 'allClientUser';

header('location: ../../../Views/Admin/main.php');


?>