<?php
require_once('/opt/lampp/htdocs/Kraatoo/Model/DataBaseConnection.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/personal.php');
function insertPost ($article, $date)
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $userID = $_SESSION['user']->userID;
    $conn = getConnection();
    $query = "INSERT INTO posts (userid, post, post_date, likes) VALUES ('$userID', '$article', '$date', 0);";
    mysqli_query($conn, $query);
}
?>