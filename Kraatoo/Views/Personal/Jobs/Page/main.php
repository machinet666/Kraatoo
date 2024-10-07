<?php
require_once('../../../../Entity/personal.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/business.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/job.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs</title>
    <link rel="stylesheet" href="../design.css">
    <link rel="stylesheet" href="../../header.css">

</head>

<body>
    <?php
    include '../../header.php';
    ?>
    <div style="display: flex; margin-left: 295px;">

        <div>
            <?php
            // print_r($_SESSION['allJobPublisher'][$_GET['option']]);
            for ($index = 0; $index < count($_SESSION['allJobsCircular'][$_GET['option']]); $index++) {
                $_SESSION['currentIndex'] = $index;
                include 'jobIndex.php';
            }
            ?>
        </div>

        <div style="margin-bottom: 200px;">
            <?php
            if (isset($_GET['index']) and count($_SESSION['allJobsCircular'][$_GET['option']]) != 0) {
            ?>
                <fieldset id="circular">
                    <div style="margin-left: 10px; margin-right: 10px;">
                        <label><b><a style="text-decoration: none;" href="businessProfile.php?index=<?php echo $_GET['index']; ?>&option=<?php echo $_GET['option'] ?>"><?php echo $_SESSION['allJobPublisher'][$_GET['option']][$_GET['index']]->name . "</a></b><br><br>" . $_SESSION['allJobsCircular'][$_GET['option']][$_GET['index']]->publishDate; ?></label><br><br>
                        <label><?php echo $_SESSION['allJobsCircular'][$_GET['option']][$_GET['index']]->title; ?></label><br><br>
                        <label><?php echo $_SESSION['allJobsCircular'][$_GET['option']][$_GET['index']]->type; ?></label><br><br>
                        <label><?php echo $_SESSION['allJobsCircular'][$_GET['option']][$_GET['index']]->aboutCompany; ?></label><br><br>
                        <label><?php echo $_SESSION['allJobsCircular'][$_GET['option']][$_GET['index']]->overview; ?></label><br><br>
                        <label><?php echo $_SESSION['allJobsCircular'][$_GET['option']][$_GET['index']]->salaryRange; ?></label><br><br>
                        <label><?php echo $_SESSION['allJobsCircular'][$_GET['option']][$_GET['index']]->location; ?></label><br><br>
                        <?php
                        if ($_GET['option'] == 'Browse') {
                        ?>
                            <a href="../../../../Controller/Personal/Jobs/jobApply.php?index=<?php echo $_GET['index'] . "&option=" . $_GET['option']; ?>"><button <?php if (isset($_GET['isApplied'])) {
                                                                                                                                                                        echo 'disabled';
                                                                                                                                                                    } ?>><?php if (isset($_GET['isApplied'])) {
                                                                                                                                                                        echo 'Applied';
                                                                                                                                                                    } else {
                                                                                                                                                                        echo 'Apply';
                                                                                                                                                                    } ?></button></a><br><br>
                        <?php } ?>

                    <?php
                } else {
                    if ($_GET['option'] == 'Applied')
                        echo "<b> No job applications have been submitted <b>";
                    else
                        echo "<b> No jobs available right now <b>";
                }
                    ?>
                    </div>

                </fieldset><br>
                <?php

                if ($_GET['option'] == 'Browse') {
                    echo "<h3><a href='../../../../Controller/Personal/Jobs/circular.php?option=" . $_GET['option'] . "'>See Your Applied Jobs</a></h3>";
                }

                ?>

        </div>

    </div>
    <hr>
    <?php
    include '../../../footer.php';
    ?>

</body>

</html>