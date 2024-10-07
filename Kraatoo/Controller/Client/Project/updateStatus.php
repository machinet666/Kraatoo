<?php
// echo $_GET['status'];
require_once('/opt/lampp/htdocs/Kraatoo/Model/project.php');
$index = $_GET['index'];
if (session_status() == PHP_SESSION_NONE)
    session_start();
    updateStatus($_SESSION['allRunningProjectForClient'][$_GET['index']]->projectID, $_GET['status']);
    header("location: runningProject.php?index=$index&status");
?>