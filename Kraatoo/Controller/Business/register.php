<?php
require_once('../../Entity/business.php');
require_once('../../Entity/user.php');
require_once('../../Model/business.php');

function fiilUpCheck()
{
    $flag = true;
    if (session_status() == PHP_SESSION_NONE) 
    {
        session_start();
    }
    foreach ($_POST as $key => $value) 
    {
        if (empty($value)) {
            $_SESSION['fillUpError'][$key] = '*Fill this field is mandatory';
            $flag = false;
        }
        $_SESSION['fillUpValue'][$key] = $value;
    }

    if (!isset($_POST['type'])) 
    {
        $_SESSION['fillUpError']['type'] = '*Fill this field is mandatory';
        $flag = false;
    }

    if ($_POST['password'] != $_POST['retypepassword']) 
    {
        $_SESSION['passwordmatch'] = "*Password didn't match";
        $flag = false;
    }

    if (!isset($_POST['type'])) 
    {
        $_SESSION['fillUpError']['type'] = '*Fill this field is mandatory';
        $flag = false;
    }
    return $flag;
}


if (isset($_POST['register']) and fiilUpCheck()) 
{
    $contact = new contact($_POST['email'], $_POST['phonenumber'], $_POST['address']);
    $business = new Business($_POST['name'], $_POST['type'], $_POST['tradelicenseno'], $_POST['numberofemployees'], $_POST['yearofestablishment'], $_POST['websiteurl'], $_POST['cName'], $_POST['cEmail'], $_POST['cNumber'], $contact);

    $user = new user();
    $user->email = $_POST['email'];
    $user->type = "Business";
    $user->password = $_POST['password'];

    if (insertBusiness($business, $user)) 
    {
        header('location: ../Redirect/login.php');
    } 
    else 
    {
        $_SESSION['fillUpError']['emailAvailibility'] = "*This Email is already registered";
        header('location: ../../Views/Business/Registration/page.php');
    }
}
else 
{
    header('location: ../../Views/Business/Registration/page.php');
}
