<main>
    <fieldset style="width: 700px;">
        <br>
        <div style="margin-left: 10px">
            <?php
            $index = $_GET['index'];
            echo "Publish Date:</b> " . $_SESSION['allPastProjectForClient'][$_GET['index']]->publishDate . "<br> <br></label> <b>"
                . "Title : " . $_SESSION['allPastProjectForClient'][$_GET['index']]->title . "</label> <br> <br> <label>"
                . "Description:</b><br>" . $_SESSION['allPastProjectForClient'][$_GET['index']]->description . "<br> <br></label> <b>"
                . "Skill List:</b> " . $_SESSION['allPastProjectForClient'][$_GET['index']]->skillList . "<br> <br></label> <b>"
                . "Complexity:</b> " . $_SESSION['allPastProjectForClient'][$_GET['index']]->complexity . "<br> <br></label> <b>"
                . "Experience:</b> " . $_SESSION['allPastProjectForClient'][$_GET['index']]->experience . "<br> <br></label><b>"
                . "Payment Type:</b> " . $_SESSION['allPastProjectForClient'][$_GET['index']]->paymentType . "<br> <br></label> </form>"
                . "<input type='number' name='projectID' value='" . $_SESSION['allPastProjectForClient'][$_GET['index']]->projectID . "' hidden>"
                . "<input type='number' name='userID' value='" . $_SESSION['user']->userID . "' hidden>"
                . "<input type='number' name='index' value='" . $_GET['index'] . "' hidden>"
                . "<b>Project Builder:</b> <a href='../../../../Controller/Client/Project/redirectBuilderProfile.php?index=$index'>" . $_SESSION['projectBuilders'][$_GET['index']]->firstName . " " . $_SESSION['projectBuilders'][$_GET['index']]->lastName . "</a> <br> <br>";
            ?>
        </div>
        <br>
    </fieldset>
</main>