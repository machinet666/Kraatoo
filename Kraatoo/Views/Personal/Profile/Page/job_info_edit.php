<?php
require_once('../../../../Controller/fillUpValue.php')
?>
<div>
    <h2>Job Details</h2>
    <?php
    $i = 1;
    foreach ($_SESSION['currentJob'] as $value)
    {
        $_SESSION['job'] = $value;
        valueAssignJExperienceInfo();
        echo "Job ". $i. "<br>";
        include 'experienceEdit.php';
        $i += 1;
    }
    ?>
</div>
