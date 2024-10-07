<main>
    <fieldset id="circular">
    <div style="margin-left: 10px; margin-right: 10px;">
        <?php
        $index = $_GET['index'];
        $response = serialize(new response($_SESSION['retreiveAllPendingProjectForFreelancer'][$_GET['index']]->publisherID, $_SESSION['user']->userID, $_SESSION['retreiveAllPendingProjectForFreelancer'][$_GET['index']]->projectID));

        echo "<form action='../../../../Controller//Personal/Project/requestProject.php'> <label> <b> <a href='publisherProfile.php'>" . $_SESSION['projectPublisher']->firstName . " " . $_SESSION['projectPublisher']->lastName . "</a> </b> </label> <br> <br> <label> <b>"
            . "Publish Date:</b> " . $_SESSION['retreiveAllPendingProjectForFreelancer'][$_GET['index']]->publishDate . "<br> <br></label> <b>"
            . "Title : " . $_SESSION['retreiveAllPendingProjectForFreelancer'][$_GET['index']]->title . "</label> <br> <br> <label>"
            . "Description:</b><br>" . $_SESSION['retreiveAllPendingProjectForFreelancer'][$_GET['index']]->description . "<br> <br></label> <b>"
            . "Skill List:</b> " . $_SESSION['retreiveAllPendingProjectForFreelancer'][$_GET['index']]->skillList . "<br> <br></label> <b>"
            . "Complexity:</b> " . $_SESSION['retreiveAllPendingProjectForFreelancer'][$_GET['index']]->complexity . "<br> <br></label> <b>"
            . "Experience:</b> " . $_SESSION['retreiveAllPendingProjectForFreelancer'][$_GET['index']]->experience . "<br> <br></label>"
            . "<b>Asking Price:</b> <input type='text' name='askingPrice' value='" . $_SESSION['retreiveAllPendingProjectForFreelancer'][$_GET['index']]->offeredPrice . "'> <br> <br> <b> <label>"
            . "Payment Type:</b> " . $_SESSION['retreiveAllPendingProjectForFreelancer'][$_GET['index']]->paymentType . "<br> <br></label> <label> <b>"
            . "<b>Asking Time Period:</b> <input type='text' name='askingTime' value='" . $_SESSION['retreiveAllPendingProjectForFreelancer'][$_GET['index']]->timePeriod . "'> <br> <br> <b> <label>"
            . "Payment Type:</b> " . $_SESSION['retreiveAllPendingProjectForFreelancer'][$_GET['index']]->paymentType . "<br> <br></label> <b>"
            . "<input type='hidden' name='response' value='$response'>"
            . "<input type='hidden' name='index' value='$index'>"
            . "<input type='submit' name='apply' value='Apply'";
            if (isset($_GET['disable']))
                echo "disabled";
            echo "></form>";
        ?>
        <br><br>
    </fieldset>
    </div>
</main>