<?php
require_once('../../Entity/admin.php');
require_once('../../Entity/user.php');
require_once('../../Entity/contact.php');
require_once('../../Model/ADMIN.php');
require_once('../../Model/contact.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$flag = true;
foreach ($_POST as $key => $value) {
    if (empty($value)) {
        $_SESSION['fillUpError'][$key] = '*Fill this field is mandatory';    
        $flag = false;
    }
    $_SESSION['fillUpValue'][$key] = $value;
}

if ($_POST['password'] != $_POST['retypepassword'])
{
    $_SESSION['passwordmatch'] = "*Password didn't match";
    $flag = false;
}


if (isset($_POST['register']) && $flag == true)
{
    $user = new user($_POST['email'], 'Admin', $_POST['password']);
    $user->userID = insertUser($user);

    if ($user->userID != -1)
    {
        $contact = new contact($_POST['email'], $_POST['phonenumber']);
        $contact->id = insertContact($contact);
        $admin = new admin($_POST['firstname'], $_POST['lastname'], $contact);
        $admin->userId = $user->userID;
        $admin->display();

        insertAdmin($admin);
        header('location: ../Redirect/login.php');

    }
    else
    {
        $_SESSION['fillUpError']['emailAvailibility'] = "*This Email is already registered";
        header('location: ../../Views/superAdmin.php');
    }

}
else
{
    header('location: ../../Views/superAdmin.php');
}

