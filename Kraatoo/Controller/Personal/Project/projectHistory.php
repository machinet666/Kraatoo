<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/personal.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/project.php');

if (session_status() == PHP_SESSION_NONE)
    session_start();

$_SESSION['allPastProjectForFreelancer'] = retreiveAllPastProjectForFreelancer($_SESSION['user']->userID);

if (count($_SESSION['allPastProjectForFreelancer']))
    header('location: ../../../Views/Personal/Project/Page/projectHistory.php?index=0');
else
    header('location: ../../../Views/Personal/Project/Page/projectHistory.php');
