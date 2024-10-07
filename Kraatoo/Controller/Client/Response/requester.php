<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/project.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/response.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/personal.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/project.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/response.php');

if (session_status() == PHP_SESSION_NONE)
    session_start();

$index = $_GET['index'];
if ($_GET['option'] == "profile") 
{
    $requestIndex = $_GET['requestIndex'];
    header("location: ../../../Views/Client/Response/Page/requesterProfile.php?index=$index&requestIndex=$requestIndex");
} 
else if ($_GET['option'] == "accept")
{
    $_SESSION['accept'][$_GET['projectID']] = $_GET['requestID'];

    $_SESSION['retreiveAllPendingProjectForClient'][$_SESSION['currentIndex']]->startDate = date('Y-m-d');
    $_SESSION['retreiveAllPendingProjectForClient'][$_SESSION['currentIndex']]->deadline = date('Y-m-d', strtotime("+" . $_SESSION['response'][$_SESSION['responseIndex']]->askingTime . "day"));
    $_SESSION['retreiveAllPendingProjectForClient'][$_SESSION['currentIndex']]->status = "running";
    $_SESSION['retreiveAllPendingProjectForClient'][$_SESSION['currentIndex']]->builderID = $_SESSION['requester'][$_SESSION['responseIndex']]->userID;
    startProject($_SESSION['retreiveAllPendingProjectForClient'][$_SESSION['currentIndex']]);
    header("location: ../../../Views/Client/Response/Page/main.php?index=$index");
}
else if ($_GET['option'] == "delete")
{
    deleteResponse($_SESSION['response'][$_SESSION['responseIndex']]);
    header("location: ../redirect.php?option=response");
}
