<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/user.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/user.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/Personal.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/business.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/client.php');


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$user = retrieveUser($_POST['email'], $_POST['pass']);
$_SESSION['password'] = $user->password;
$_SESSION['credential'] = $user;

if ($user == null) {
    $_SESSION['logInError'] = 'User Not Found';
    header('location: ../Views/Log%20In/page.php');
}

if ($user->type == "Personal") 
{
    $_SESSION['user'] = retrievePersonal($_SESSION['credential']->userID);
    header('location: ../Controller/Personal/redirect.php');
}

if ($user->type == "Business") 
{
    $_SESSION['user'] = retreiveBusiness($_SESSION['credential']->userID);
    header('location: ../Controller/Business/redirect.php');

}

if ($user->type == 'Client') 
{
    $_SESSION['user'] = retreiveClient($user->userID);
    header('location: ../Controller/Client/redirect.php');
}

if ($user->type == 'SuperAdmin') 
{
    $_SESSION['fillUpError'] = [

        'firstname' => '',
        'lastname' => '',
        'email' => '',
        'phonenumber' => '',
        'password' => '',
        'retypepassword' => '',
        'emailAvailibility' => '',
        'retypepassword' => ''
    ];
    
    $_SESSION['fillUpValue'] = [
        'firstname' => '',
        'lastname' => '',
        'email' => '',
        'phonenumber' => '',
        'password' => '',
        'retypepassword' => '',
        'emailAvailibility' => ''
    
    ];

    $_SESSION['passwordmatch'] = '';



    header('location: ../Views/superAdmin.php');
    
}

if ($user->type == 'Admin') 
{

    $_SESSION['allPersonalUser'] = retrieveAllPersonal();
    $_SESSION['allBusinessUser'] = retreiveAllBusiness();
    $_SESSION['allClientUser'] = retrieveAllClient();


    header('location: ../Controller/Admin/Redirect/personal.php');
}


