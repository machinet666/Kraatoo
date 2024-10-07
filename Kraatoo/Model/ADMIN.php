<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/admin.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/user.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/DataBaseConnection.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/user.php');

function insertAdmin(admin $admin)
{
    $userID = $admin->userId;
    $firstName = $admin->firstName;
    $lastName = $admin->lastName;
    $contactID = $admin->contact->id; 

    $conn = getConnection();
    $query = "INSERT INTO admin (userid, firstname, lastname, contactid) VALUES ('$userID', '$firstName', '$lastName', '$contactID')";
    mysqli_query($conn, $query);
}
