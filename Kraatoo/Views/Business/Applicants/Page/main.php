<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/job.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/personal.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include '../../header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicants</title>
    <link rel="stylesheet" href="../../header.css">
    <link rel="stylesheet" href="../design.css">
</head>

<body>
    <br><br><br>
    <h3 style="font-size: 1.5rem; margin-left: 200px;"><u>Posted Jobs</u></h3><br>
    <div style="display: flex; margin-left: 80px;">
        <?php

        ?>
        <div>
            <?php
            for ($i = 0; $i < count($_SESSION['allJobsCircularBusiness']); $i++) {
                $_SESSION['currentIndex'] = $i;
                include 'jobs.php';
            }
            ?>
        </div>

        <?php
        if (isset($_GET['index'])) {
        ?>

            <div>
                <fieldset>
                    <div>
                    <label><b><?php echo $_SESSION['allJobsCircularBusiness'][$_GET['index']]->title; ?></label></b><br>
                    <label><b><?php echo $_SESSION['allJobsCircularBusiness'][$_GET['index']]->type; ?></label></b><br><br><br>
                    <h3>About Us</h3>
                    <label><?php echo $_SESSION['allJobsCircularBusiness'][$_GET['index']]->aboutCompany; ?></label><br><br>
                    <h3>Overview</h3>
                    <label><?php echo $_SESSION['allJobsCircularBusiness'][$_GET['index']]->overview; ?></label><br><br>
                    <h3>Salary</h3>
                    <label><?php echo $_SESSION['allJobsCircularBusiness'][$_GET['index']]->salaryRange; ?></label><br><br>
                    </div>
                </fieldset>
            </div>
    </div>

<?php
    }
?>

<div>
    <?php
    echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>";
    include '../../../footer.php';
    ?>
</div>
</body>

</html>