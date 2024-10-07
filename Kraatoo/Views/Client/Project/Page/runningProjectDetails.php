<main>
    <fieldset>
        <br>
        <div style="margin-left: 10px">
            <?php
            $index = $_GET['index'];
            echo "Publish Date:</b> " . $_SESSION['allRunningProjectForClient'][$_GET['index']]->publishDate . "<br> <br></label> <b>"
                . "Title : " . $_SESSION['allRunningProjectForClient'][$_GET['index']]->title . "</label> <br> <br> <label>"
                . "Description:</b><br>" . $_SESSION['allRunningProjectForClient'][$_GET['index']]->description . "<br> <br></label> <b>"
                . "Skill List:</b> " . $_SESSION['allRunningProjectForClient'][$_GET['index']]->skillList . "<br> <br></label> <b>"
                . "Complexity:</b> " . $_SESSION['allRunningProjectForClient'][$_GET['index']]->complexity . "<br> <br></label> <b>"
                . "Experience:</b> " . $_SESSION['allRunningProjectForClient'][$_GET['index']]->experience . "<br> <br></label><b>"
                . "Payment Type:</b> " . $_SESSION['allRunningProjectForClient'][$_GET['index']]->paymentType . "<br> <br></label> </form>"
                . "<input type='number' name='projectID' value='" . $_SESSION['allRunningProjectForClient'][$_GET['index']]->projectID . "' hidden>"
                . "<input type='number' name='userID' value='" . $_SESSION['user']->userID . "' hidden>"
                . "<input type='number' name='index' value='" . $_GET['index'] . "' hidden>"
                . "<b>Project Builder:</b> <a href='../../../../Controller/Client/Project/redirectBuilderProfile.php?index=$index'>" . $_SESSION['projectBuilders'][$_GET['index']]->firstName . " " . $_SESSION['projectBuilders'][$_GET['index']]->lastName . "</a> <br> <br>";
            ?>
            <form action="../../../../Controller/Client/Project/updateStatus.php">
                <input type="hidden" name="index" value="<?php echo $index ?>">

                <div style="display: flex;">
                <div style="margin-left: -10px;">
                <input type="submit" id="complete" name="status" value="Complete" <?php if (isset($_GET['status'])) echo "disabled"; ?>>
                </div>

                <div style="margin-left: 20px;">
                <input type="submit" id="cancel" name="status" value="Cancel" <?php if (isset($_GET['status'])) echo "disabled"; ?>>
                </div>
                </div>
            </form>
        </div>
        <br>
    </fieldset>
</main>