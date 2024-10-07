<?php

require_once('../../Entity/client.php');
require_once('../../Entity/user.php');
require_once('../../Model/client.php');

$flag = true;
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
foreach ($_POST as $key => $value) {
    if (empty($value) and isset($_SESSION['fillUpError'][$key])) 
    {
        $_SESSION['fillUpError'][$key] = '*Fill this field is mandatory';
        $flag = false;
    }
    $_SESSION['fillUpValue'][$key] = $value;
}

if (!isset($_POST['organizationtype'])) 
{
    $_SESSION['fillUpError']['organizationtype'] = '*Fill this field is mandatory';
    $flag = false;
}

if (!isset($_POST['organizationtype'])) 
{
    $_SESSION['fillUpError']['organizationtype'] = '*Fill this field is mandatory';
    $flag = false;
}


if ($_POST['password'] != $_POST['retypepassword']) 
{
    $_SESSION['passwordmatch'] = "*Password didn't match";
    $flag = false;
} 


if (isset($_POST['register']) && $flag == true) 
{
    $person = new person($_POST['firstname'], $_POST['lastname']);
    $client = new client($_POST['organizationname'], $_POST['organizationtype'], $_POST['website'], $_POST['nid'], $_POST['projectArea']);
    $client->setPerson($person);
    $client->dateOfBirth = date('Y-m-d', strtotime($_POST['dateofbirth']));

    $contact = new contact($_POST['email'], $_POST['phonenumber'], $_POST['address']);
    $client->contact = $contact;

    $user = new user($_POST['email'], "Client", $_POST['password']);

    if (insertClient($client, $user)) 
    {
        header('location: ../Redirect/login.php');
    } 
    else 
    {
        $_SESSION['fillUpError']['emailAvailibility'] = "*This Email is already registered";
        header('location: ../../Views/Client/Registration/page.php');
    }
} 
else {
    header('location: ../../Views/Client/Registration/page.php');
}
