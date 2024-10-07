<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
$_SESSION['fillUpError'] = [
    'name' => '',
    'type' => '',
    'numberofemployees' => '',
    'email' => '',
    'address' => '',
    'phonenumber' => '',
    'tradelicenseno' => '',
    'websiteurl' => '',
    'yearofestablishment' => '',
    'cName' => '',
    'cEmail' => '',
    'cNumber' => '',
    'password' => '',
    'emailAvailibility' => '',
];
$_SESSION['fillUpValue'] = [
    'name' => '',
    'type' => '',
    'numberofemployees' => '',
    'email' => '',
    'address' => '',
    'phonenumber' => '',
    'tradelicenseno' => '',
    'websiteurl' => '',
    'yearofestablishment' => '',
    'cName' => '',
    'cEmail' => '',
    'cNumber' => '',
    'password' => '',
    'retypepassword' => '',
    'emailAvailibility' => '',
];

$_SESSION['passwordmatch'] = '';

header('location: ../../Views/Business/Registration/page.php');
?>


