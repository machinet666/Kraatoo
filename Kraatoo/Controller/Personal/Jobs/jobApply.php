<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/job.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/personal.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/application.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/application.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_GET['index']) and isset($_SESSION['user'])) 
{
    $application = new application($_SESSION['allJobsCircular'][$_GET['option']][$_GET['index']]->jobID, $_SESSION['user']->userID);
    insertApplication($application);
    $index = $_GET['index'];
    $option = $_GET['option'];
    $_SESSION['allJobsCircular']['Applied'][] = $_SESSION['allJobsCircular']['Browse'][$index];
    $_SESSION['allJobPublisher']['Applied'][] = $_SESSION['allJobPublisher']['Browse'][$index];
    header("location: ../../../Views/Personal/Jobs/Page/main.php?index=$index&option=$option&isApplied=yes");

}
