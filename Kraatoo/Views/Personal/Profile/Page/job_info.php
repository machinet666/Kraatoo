<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/experience.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<div style="display: flex;">
    <h2>Job Details</h2>

    <a href="../../../../Controller/Personal/Profile/update_job_info.php"> <img src="../../../Image/edit.png" style="width: 25px; height: 25px"> </a>
</div>
<div>
    <?php
    $i = 1;
    foreach ($_SESSION['currentJob'] as $value) {
        $_SESSION['job'] = $value;
        echo "Job " . $i . "<br>";
        include 'experience.php';
        $i += 1;
    }
    ?>
    <p>Preferred Job Position: <?php echo $_SESSION['user']->preferred_position ?> </p>
    <?php
    $i = 1;
    foreach ($_SESSION['pastJob'] as $value) {
        $_SESSION['job'] = $value;
        echo "Experience " . $i . "<br>";
        include 'experience.php';
        $i += 1;
    }
    ?>
    <a href="#">
        <p>Add Work Experience</p>
    </a>
</div><br>