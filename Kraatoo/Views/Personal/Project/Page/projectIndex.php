<aside style="margin-right: 70px;">
    <a href="../../../../Controller/Personal/Project/retrivePublisher.php?index=<?php echo $_SESSION['currentIndex'] ?>" style="text-decoration: none;">
        <fieldset id="index" >
            <?php
            echo "<b>" . $_SESSION['retreiveAllPendingProjectForFreelancer'][$_SESSION['currentIndex']]->title . "</b>"
                . "<br>"
                . "Complexity: " . $_SESSION['retreiveAllPendingProjectForFreelancer'][$_SESSION['currentIndex']]->complexity
                . "<br>"
                . "Experience: " . $_SESSION['retreiveAllPendingProjectForFreelancer'][$_SESSION['currentIndex']]->experience
                . "<br>"
                . "Offered Price: " . $_SESSION['retreiveAllPendingProjectForFreelancer'][$_SESSION['currentIndex']]->offeredPrice
                . "<br>"
                . "Time Period: " . $_SESSION['retreiveAllPendingProjectForFreelancer'][$_SESSION['currentIndex']]->timePeriod;
            ?>
        </fieldset>
    </a>
</aside>