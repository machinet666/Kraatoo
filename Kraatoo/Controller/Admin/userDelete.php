<?php
require_once('/opt/lampp/htdocs/Kraatoo/Model/contact.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/person.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/Personal.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/business.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/client.php');
require_once('/opt/lampp/htdocs/Kraatoo/Controller/Admin/operations.php');


$key = $_SESSION['key'];
if ($key == 'allPersonalUser')
{
    deleteAllUser($_GET['userId']);
    deletePersonal($_GET['userId'], $_GET['personId'], $_GET['ContactId'] );
    header('location: Redirect/personal.php');
}


$key = $_SESSION['key'];
if ($key == 'allBusinessUser')
{

    deleteAllUser($_GET['userId']);
    deleteBusiness($_GET['userId'], $_GET['ContactId']);
    header('location: Redirect/business.php');
}

if ($key == 'allClientUser')
{
    deleteAllUser($_GET['userId']);
    deleteClient($_GET['userId'], $_GET['personId'], $_GET['ContactId']);
    header('location: Redirect/client.php');
}











