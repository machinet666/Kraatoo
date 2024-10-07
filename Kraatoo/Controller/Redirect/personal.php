<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
$_SESSION['fillUpError'] = [
    'firstname' => '',
    'lastname' => '',
    'dateofbirth' => '',
    'email' => '',
    'address' => '',
    'phonenumber' => '',
    'bachelorDegree' => '',
    'specializedfield' => '',
    'preferredworkposition' => '',
    'gender' => '',
    'password' => '',
    'emailAvailibility' => '',
];

$_SESSION['fillUpValue'] = [
    'firstname' => '',
    'lastname' => '',
    'dateofbirth' => '',
    'email' => '',
    'address' => '',
    'phonenumber' => '',
    'bachelorDegree' => '',
    'mastersDegree' => '',
    'specializedfield' => '',
    'preferredworkposition' => '',
    'gender' => '',
    'password' => '',
    'retypepassword' => '',
];


$_SESSION['passwordmatch'] = '';

header('location: ../../Views/Personal/Registration/page.php');
?>

