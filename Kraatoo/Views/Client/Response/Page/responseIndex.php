<main>
    <fieldset style="width: 700px;">
        <div style="margin: 10px 0px 10px 10px;">
            <?php
            echo "Publish Date:</b> " . $_SESSION['retreiveAllPendingProjectForClient'][$_GET['index']]->publishDate . "<br> <br></label> <b>"
                . "Title : " . $_SESSION['retreiveAllPendingProjectForClient'][$_GET['index']]->title . "</label> <br> <br> <label>"
                . "Description:</b><br>" . $_SESSION['retreiveAllPendingProjectForClient'][$_GET['index']]->description . "<br> <br></label> <b>"
                . "Skill List:</b> " . $_SESSION['retreiveAllPendingProjectForClient'][$_GET['index']]->skillList . "<br> <br></label> <b>"
                . "Complexity:</b> " . $_SESSION['retreiveAllPendingProjectForClient'][$_GET['index']]->complexity . "<br> <br></label> <b>"
                . "Experience:</b> " . $_SESSION['retreiveAllPendingProjectForClient'][$_GET['index']]->experience . "<br> <br></label><b>"
                . "Payment Type:</b> " . $_SESSION['retreiveAllPendingProjectForClient'][$_GET['index']]->paymentType . "<br> <br></label> </form>"
                . "<input type='number' name='projectID' value='" . $_SESSION['retreiveAllPendingProjectForClient'][$_GET['index']]->projectID . "' hidden>"
                . "<input type='number' name='userID' value='" . $_SESSION['user']->userID . "' hidden>"
                . "<input type='number' name='index' value='" . $_GET['index'] . "' hidden>";
            echo "<label><b>" . count($_SESSION['response']) . " Freelancer Response" . "</b></label> <br>";

            if (count($_SESSION['response']) != 0) {
                for ($responseIndex = 0; $responseIndex < count($_SESSION['response']); $responseIndex++) {
                    $_SESSION['responseIndex'] = $responseIndex;
                    include 'responseDetails.php';
                }
            }
            ?>
        </div>
    </fieldset>
</main>