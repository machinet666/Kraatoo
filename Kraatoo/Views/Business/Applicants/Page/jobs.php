<div style="margin-left: 120px;">
    <?php
    $index = $_SESSION['currentIndex'];
    $key = $_SESSION['allJobsCircularBusiness'][$index]->jobID;
    echo "<b><a href = '?index=$index' style='text-decoration: none;'>" . $_SESSION['allJobsCircularBusiness'][$index]->title . "</a></b>" ?>
    <a style="margin-left: 20px;" href='../../../../Controller/Business/jobDelete.php?index=<?php echo $index; ?>'>Delete</a><br>
    <?php
    echo $_SESSION['allJobsCircularBusiness'][$index]->publishDate . "<br><br>" . count($_SESSION['allApplicantsForBusiness'][$key]) . ' ';
    ?>
    applicant<br>
    <?php
    for ($j = 0; $j < count($_SESSION['allApplicantsForBusiness'][$key]); $j++) {
        echo "<a style = 'text-decoration: none;' href='applicantProfile.php?index=$j&key=$key'>" .
            $_SESSION['allApplicantsForBusiness'][$key][$j]->firstName . " " . $_SESSION['allApplicantsForBusiness'][$key][$j]->lastName
            . "</a><br>";
    }
    ?>
    </a>
    <br>
    <br>

</div>
<br>
<br>