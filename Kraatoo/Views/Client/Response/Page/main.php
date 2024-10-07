<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/project.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/client.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/personal.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/response.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>
    <link rel="stylesheet" href="../../header.css">
</head>

<body>
    <?php
    include '../../header.php';
    ?>

    <div style="display: flex; margin-left: 425px; margin-top: 60px;">

        <div>
            <?php
            if (isset($_GET['index'])) {
                for ($index = 0; $index < count($_SESSION['retreiveAllPendingProjectForClient']); $index++) {
                    $_SESSION['currentIndex'] = $index;
                    include 'projectIndex.php';
                    echo "<br>";
                }
            ?>
        </div>

        <div style="margin-left: 20px;">
        <?php
                include 'responseIndex.php';
            } else
                echo "<b> Nobody responsed yet <b>";
        ?>
        </div>

    </div>
    <div style="margin-top: 400px;">
    <hr>
    <?php
    include "../../../footer.php";
    ?>
    </div>

</body>

</html>