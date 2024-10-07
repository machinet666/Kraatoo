<aside>
    <a href="../../../../Controller/Client/Response/retriveResponse.php?index=<?php echo $_SESSION['currentIndex'] ?>" style="text-decoration: none;">
        <fieldset>
            <div style="margin-right: 10px; margin-left: 5px">
                <?php
                echo "<b>" . $_SESSION['retreiveAllPendingProjectForClient'][$_SESSION['currentIndex']]->title . "</b>"
                    . "<br>"
                    . "Complexity: " . $_SESSION['retreiveAllPendingProjectForClient'][$_SESSION['currentIndex']]->complexity
                    . "<br>"
                    . "Experience: " . $_SESSION['retreiveAllPendingProjectForClient'][$_SESSION['currentIndex']]->experience
                    . "<br>"
                    . "Offered Price: " . $_SESSION['retreiveAllPendingProjectForClient'][$_SESSION['currentIndex']]->offeredPrice
                    . "<br>"
                    . "Time Period: " . $_SESSION['retreiveAllPendingProjectForClient'][$_SESSION['currentIndex']]->timePeriod;
                ?>
            </div>
        </fieldset>

    </a>
</aside>