<aside>
    <a href="../../../../Controller/Client/Project/runningProject.php?index=<?php echo $_SESSION['currentIndex']; ?>" style="text-decoration: none;">
        <fieldset style="width: 200px;">
            <?php
            echo "<b>" . $_SESSION['allPastProjectForClient'][$_SESSION['currentIndex']]->title . "</b>"
                . "<br>"
                . "Complexity: " . $_SESSION['allPastProjectForClient'][$_SESSION['currentIndex']]->complexity
                . "<br>"
                . "Experience: " . $_SESSION['allPastProjectForClient'][$_SESSION['currentIndex']]->experience
                . "<br>"
                . "Offered Price: " . $_SESSION['allPastProjectForClient'][$_SESSION['currentIndex']]->offeredPrice
                . "<br>"
                . "Time Period: " . $_SESSION['allPastProjectForClient'][$_SESSION['currentIndex']]->timePeriod
                . "<br>"
                . "Status: " . $_SESSION['allPastProjectForClient'][$_SESSION['currentIndex']]->status;
            ?>
        </fieldset>
    </a>
</aside>