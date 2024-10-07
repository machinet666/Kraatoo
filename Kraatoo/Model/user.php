<?php
//require_once('/opt/lampp/htdocs/Kraatoo/Entity/contact.php');
//require_once('/opt/lampp/htdocs/Kraatoo/Entity/person.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/personal.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/DataBaseConnection.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/user.php');

function searchUser($email)
{
    $conn = getConnection();
    $query = "SELECT userid FROM `user` WHERE email = '$email';";
    $status = mysqli_query($conn, $query);
    if (mysqli_num_rows($status) != 0) {
        return true;
    }
}

function insertUser(user $user)
{
    $email = $user->email;
    $type = $user->type;
    $password = $user->password;

    if (searchUser($email)) {
        return -1;
    }

    $conn = getConnection();
    $query = "INSERT INTO user (email, type, password) VALUES ('$email', '$type', '$password');";
    $status = mysqli_query($conn, $query);

    $query = "SELECT userid FROM user ORDER BY userid DESC LIMIT 1;";
    $status = mysqli_query($conn, $query);

    if (mysqli_num_rows($status) == 1) {
        $row = mysqli_fetch_assoc($status);
        return $row['userid'];
    } else {
        echo "Failed to insert user information";
    }
}

function retrieveUser($email, $password)
{
    $conn = getConnection();
    $query = "select * from user where email = '$email' and password ='$password';";
    $status = mysqli_query($conn, $query);

    if (mysqli_num_rows($status) == 1) {
        $row = mysqli_fetch_assoc($status);
        $user = new user($row['email'], $row['type'], $row['password']);
        $user->userID = $row['userid'];
        return $user;
    } else {
        return null;
    }
}

function retrieveAllUser()
{
    $conn = getConnection();
    $query = 'SELECT * FROM user';
    $status = mysqli_query($conn, $query);
    $numberOfUser = mysqli_num_rows($status);
    echo $numberOfUser;
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if ($numberOfUser > 0)
    {
        $allUsers = [];
        for ($i = 0; $i < $numberOfUser; $i++)
        {
            $row = mysqli_fetch_assoc($status);
            $user = new user($row['email'], $row['type'], $row['password']);
            $user->userID = $row['userid'];
            if ($user->type == 'Personal')
            {
                retrievePersonal($user->userID);
                
            }
            $allUsers[$i] = $user;
        }
        $_SESSION['allUser'] = $allUsers;
    }

}

function updateUser($email, $password = '')
{
    if (searchUser($email)) 
    {
        return false;
    } 
    else 
    {
        $conn = getConnection();
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['user']->userID;
        $query = '';
        $userId = $_SESSION['user']->userID;
        if (empty($password)) {
            $query = "UPDATE user SET `email` = '$email' WHERE userid = '$userId'";
        } else {
            $query = "UPDATE user SET `password` = '$password' WHERE userid = '$userId'";
        }
        mysqli_query($conn, $query);
        return true;
    }
}

function deleteUser($userID)
{
    $conn = getConnection();
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 0;");
    $query = "DELETE FROM user WHERE userid = '$userID';";
    mysqli_query($conn, $query);
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 1;");
}

function changePassword ($userID, $password)
{
    $conn = getConnection();
    $query = "UPDATE user SET password = '$password' WHERE userid = $userID;";
    mysqli_query($conn, $query);
}
