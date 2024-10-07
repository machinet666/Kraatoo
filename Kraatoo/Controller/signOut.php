<?php
if (session_status() == PHP_SESSION_NONE)
    session_start();

session_destroy();
header('location: ../Views/Log%20In/page.php');
