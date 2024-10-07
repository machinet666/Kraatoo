<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
session_destroy();
header('location: Views/Home/page.php');
// header('location: Views/Personal/Community/Page/main.php');
