<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['fillUpError'] = [

    'firstname' => '',
    'lastname' => '',
    'organizationname' => '',
    'organizationtype' => '',
    'email' => '',
    'address' => '',
    'phonenumber' => '',
    'nid' => '',
    'website' => '',
    'projectArea' => '',
    'password' => '',
    'emailAvailibility' => ''
];

$_SESSION['fillUpValue'] = [
    'firstname' => '',
    'lastname' => '',
    'organizationname' => '',
    'organizationtype' => '',
    'email' => '',
    'address' => '',
    'phonenumber' => '',
    'nid' => '',
    'website' => '',
    'projectArea' => '',
    'password' => '',
    'retypepassword' => '',
    'emailAvailibility' => ''

];

$_SESSION['passwordmatch'] = '';



header('location: ../../Views/Client/Registration/page.php');
