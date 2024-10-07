<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/client.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/project.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/personal.php');

if (session_status() == PHP_SESSION_NONE)
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="../../header.css">
    <link rel="stylesheet" href="../design.css">
</head>

<body>
    <div style="margin-bottom: 400px;">
    <?php
    include '../../header.php';
    ?>
    <?php $a = "Post New"?>

    <div id="option">
        <form method="POST" action="../../../../Controller/Client/Project/redirect.php">
            <button id="complete" name="option" value="postNew.php"><?php echo $a ?></button><br>
            <button id="complete" name="option" value="runningProject.php">Running Project</button><br>
            <button id="complete" name="option" value="pastProject.php">Past Project</button><br>
        </form>
    </div>

    <?php
    include $_SESSION['includeName'];
    ?>
    
    </div><hr>
    <?php
    include '../../../footer.php';
    ?>
</body>

</html>

<?php
foreach ($_SESSION['fillUpErrorProjectPost'] as $key => $value) {
    $_SESSION['fillUpErrorProjectPost'][$key] = '';
}


?>