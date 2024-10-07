<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/project.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/response.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/Personal.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/client.php');
if (session_status() == PHP_SESSION_NONE)
    session_start();

if (isset($_GET['index'])) 
{
    $index = (int) $_GET['index'];
    $_SESSION['response'] = retrieveResponse($_SESSION['retreiveAllPendingProjectForClient'][$index]->projectID);
    if (count($_SESSION['response']) != 0) 
    {
        $_SESSION['requester'] = [];
        for ($responseIndex = 0; $responseIndex < count($_SESSION['response']); $responseIndex++)
            $_SESSION['requester'][$responseIndex] = retrievePersonal($_SESSION['response'][$responseIndex]->requestID);
    }
    if (isset($_GET['accepted']))
        header("location: ../../../Views/Client/Response/Page/main.php?index=$index&accepted");
    else
        header("location: ../../../Views/Client/Response/Page/main.php?index=$index");
} 
else 
{
    header("location: ../../../Views/Client/Response/Page/main.php");
}
