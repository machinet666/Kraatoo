<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/personal.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/project.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/client.php');
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
    <title>Projects</title>
    <link rel="stylesheet" href="../../header.css">
    <link rel="stylesheet" href="../design.css">
</head>

<body>
    <?php
    include '../../header.php';
    ?>

    <div style="display: flex; margin-left: 350px;">

        <div>
            <?php
            if (isset($_GET['index'])) {
                for ($index = 0; $index < count($_SESSION['retreiveAllPendingProjectForFreelancer']); $index++) {
                    $_SESSION['currentIndex'] = $index;
                    include 'projectIndex.php';
                }
            ?>
        </div>

        <div style="margin-bottom: 200px;">

            <div>
            <?php
                include 'projectDetails.php';
            } else
                echo "<b> No Project to Show <b>";
            ?><br>


            <h3><a href='../../../../Controller/Personal/Project/projectHistory.php'>Project History</a></h3>

            </div>

        </div>

    </div>
    <hr>



    <?php
    include '../../../footer.php';
    ?>

</body>

</html>