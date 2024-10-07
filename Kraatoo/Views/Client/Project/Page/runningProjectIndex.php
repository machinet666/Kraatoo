<aside>
    <a href="../../../../Controller/Client/Project/runningProject.php?index=<?php echo $_SESSION['currentIndex']; ?>" style="text-decoration: none;">
        <fieldset>
            <?php
            echo "<b>" . $_SESSION['allRunningProjectForClient'][$_SESSION['currentIndex']]->title . "</b>"
                . "<br>"
                . "Complexity: " . $_SESSION['allRunningProjectForClient'][$_SESSION['currentIndex']]->complexity
                . "<br>"
                . "Experience: " . $_SESSION['allRunningProjectForClient'][$_SESSION['currentIndex']]->experience
                . "<br>"
                . "Offered Price: " . $_SESSION['allRunningProjectForClient'][$_SESSION['currentIndex']]->offeredPrice
                . "<br>"
                . "Time Period: " . $_SESSION['allRunningProjectForClient'][$_SESSION['currentIndex']]->timePeriod;
            ?>
        </fieldset>
    </a>
</aside>