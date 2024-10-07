<?php

require_once('../../Entity/personal.php');
require_once('../../Entity/business.php');
require_once('../../Entity/client.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

</head>

<body>
    <header>
        <h1>Kraatoo</h1>
        <nav>
            <h2><a href = "../../Controller/Admin/Redirect/personal.php">Personal</h2>
            <h2><a href = "../../Controller/Admin/Redirect/business.php">Business</a></h2>
            <h2><a href = "../../Controller/Admin/Redirect/client.php">Client</a></h2>
        </nav>
    </header>
    <br><br>
    <?php
    $key = $_SESSION['key'];
    foreach ($_SESSION[$key] as $value)
    {
        $_SESSION['currentUser'] = $value;
        include 'user.php';
    }
    ?>
</body>

</html>