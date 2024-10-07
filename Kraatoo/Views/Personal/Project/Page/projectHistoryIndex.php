<aside>
    <a href="../../../../Controller/Personal/Project/retrivePublisher.php?index=<?php echo $_SESSION['currentIndex'] ?>&history" style="text-decoration: none;">
        <fieldset style="width: 200px; margin-top: 10px;">
            <?php
            echo "<b>" . $_SESSION['allPastProjectForFreelancer'][$_SESSION['currentIndex']]->title . "</b>"
                . "<br>"
                . "Complexity: " . $_SESSION['allPastProjectForFreelancer'][$_SESSION['currentIndex']]->complexity
                . "<br>"
                . "Experience: " . $_SESSION['allPastProjectForFreelancer'][$_SESSION['currentIndex']]->experience
                . "<br>"
                . "Offered Price: " . $_SESSION['allPastProjectForFreelancer'][$_SESSION['currentIndex']]->offeredPrice
                . "<br>"
                . "Time Period: " . $_SESSION['allPastProjectForFreelancer'][$_SESSION['currentIndex']]->timePeriod;
            ?>
        </fieldset>
    </a>
</aside>