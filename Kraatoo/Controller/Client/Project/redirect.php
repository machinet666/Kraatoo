<?php
require_once('/opt/lampp/htdocs/Kraatoo/Controller/fillUpValue.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/project.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/Personal.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function postNew ()
{
    
    valueAndErrorAssignClientProject();

}

function runningProject ()
{
    // echo $_SESSION['user']->userID;
    $_SESSION['allRunningProjectForClient'] = retreiveAllRunningProjectForClient($_SESSION['user']->userID);
    $size = count($_SESSION['allRunningProjectForClient']);
    $_SESSION['projectBuilders'] = [];
    if ($size != 0)
        for ($index = 0; $index < $size; $index++)
            $_SESSION['projectBuilders'][$index] = retrievePersonal($_SESSION['allRunningProjectForClient'][$index]->builderID);
}

function pastProject ()
{
    $_SESSION['allPastProjectForClient'] = retreiveAllPastProjectForClient($_SESSION['user']->userID);
    $size = count($_SESSION['allPastProjectForClient']);
    $_SESSION['projectBuilders'] = [];
    if ($size != 0)
        for ($index = 0; $index < $size; $index++)
            $_SESSION['projectBuilders'][$index] = retrievePersonal($_SESSION['allPastProjectForClient'][$index]->builderID);

}

if (isset($_POST['option']))
{
    $_SESSION['includeName'] = $_POST['option'];

    if ($_POST['option'] == 'postNew.php')
    {
        postNew ();
    }
    else if ($_POST['option'] == 'runningProject.php')
    {
        runningProject ();
    }
    else if ($_POST['option'] == 'pastProject.php')
    {
        pastProject ();
    }
}
else 
{
    postNew ();
    $_SESSION['includeName'] = 'postNew.php';
}

header('location: ../../../Views/Client/Project/Page/main.php?index=0');