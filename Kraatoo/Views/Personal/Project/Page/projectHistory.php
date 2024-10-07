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
                for ($index = 0; $index < count($_SESSION['allPastProjectForFreelancer']); $index++) {
                    $_SESSION['currentIndex'] = $index;
                    include 'projectHistoryIndex.php';
                }
            ?>
        </div>
        <div style="margin-bottom: 400px;">
            <div>

            <?php
                include 'projectHistoryDetails.php';
            } else
                echo "<b> No Project to Show <b>";
            ?><br>

            </div>
        </div>
    </div>
    <hr>

</body>


<?php
include '../../../footer.php';
?>

</html>