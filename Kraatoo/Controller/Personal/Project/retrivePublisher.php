<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/project.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/client.php');

if (session_status() == PHP_SESSION_NONE)
    session_start();

if (isset($_GET['index'])) 
{
    $_SESSION['projectPublisher'] = retreiveClient($_SESSION['retreiveAllPendingProjectForFreelancer'][$_GET['index']]->publisherID);
    $index = $_GET['index'];

    if (isset($_GET['disable'])) 
    {
        $disable = $_GET['disable'];
        header("location: ../../../../Views/Personal/Project/Page/browseProject.php?index=$index&disable=$disable");
    } 
    else
    {
        if (isset($_GET['history']))
            header("location: ../../../Views/Personal/Project/Page/projectHistory.php?index=$index");
        else
            header("location: ../../../Views/Personal/Project/Page/browseProject.php?index=$index");
    }
} 
else 
    header("location: ../../../Views/Personal/Project/Page/browseProject.php");

exit();
