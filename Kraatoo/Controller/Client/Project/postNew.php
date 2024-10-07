<?php
require_once('/opt/lampp/htdocs/Kraatoo/Controller/fillUpValue.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/project.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/project.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/DataBaseConnection.php');


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}



function updateCheckPost()
{
    $flag = true;

    foreach ($_POST as $key => $value) {
        if (empty($value) && isset($_SESSION['fillUpErrorProjectPost'][$key])) {
            $_SESSION['fillUpErrorProjectPost'][$key] = "*Fill this field is mandatory'";
            $flag = false;
        }
        $_SESSION['fillUpValueProjectPost'][$key] = $value;
    }
    return $flag;
}


if (updateCheckPost()) 
{
    $price = intval($_POST['price']) . ' ' .$_POST['currency'];
    $project = new project(0, $_SESSION['user']->userID, $_POST['title'], $_POST['description'], $_POST['skill'], $_POST['complexity'], $_POST['experience'], $price , $_POST['type'], $_POST['time']);
    insertProject($project);
    valueAndErrorAssignClientProject();
}

header('location: ../../../Views/Client/Project/Page/main.php');