<main>
    <fieldset id="project">
        <div style="margin-left: 10px; margin-right: 10px;"> 
        <?php
        echo "<form action='../../../../Controller//Personal/Project/requestProject.php'> <b> <a href='publisherProfile.php'>" . $_SESSION['projectPublisher']->firstName . " " . $_SESSION['projectPublisher']->lastName . "</a> </b>  <br> <br> <b>"
            . "Publish Date:</b> " . $_SESSION['allPastProjectForFreelancer'][$_GET['index']]->publishDate . "<br> <br> <b>"
            . "Title : " . $_SESSION['allPastProjectForFreelancer'][$_GET['index']]->title . " <br> <br>"
            . "Description:</b>" . $_SESSION['allPastProjectForFreelancer'][$_GET['index']]->description . "<br> <br> <b>"
            . "Skill List:</b> " . $_SESSION['allPastProjectForFreelancer'][$_GET['index']]->skillList . "<br> <br> <b>"
            . "Complexity:</b> " . $_SESSION['allPastProjectForFreelancer'][$_GET['index']]->complexity . "<br> <br> <b></b>"
            . "<b>Earning:</b> ". $_SESSION['allPastProjectForFreelancer'][$_GET['index']]->offeredPrice . "<br> <br> <b>"
            . "Payment Type:</b> " . $_SESSION['allPastProjectForFreelancer'][$_GET['index']]->paymentType . "<br> <br>"
            . "<b>Time Period:</b> " . $_SESSION['allPastProjectForFreelancer'][$_GET['index']]->timePeriod . " Weeks <br> <br></form>"
            . "<input type='hidden' name='index' value='" . $_GET['index'] . "'>"
            . "<input type='hidden' name='response' value='" . htmlspecialchars(serialize(new response($_SESSION['allPastProjectForFreelancer'][$_GET['index']]->publisherID, $_SESSION['user']->userID, $_SESSION['retreiveAllPendingProjectForFreelancer'][$_GET['index']]->projectID))) . "' hidden>";
        ?>
        </div>
    </fieldset>
</main>