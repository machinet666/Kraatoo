<div style="display: flex; margin-left: 400px">
    <div id="index">
        <?php
        if (count($_SESSION['allRunningProjectForClient']) != 0) {
            for ($index = 0; $index < count($_SESSION['allRunningProjectForClient']); $index++) {
                $_SESSION['currentIndex'] = $index;
                include 'runningProjectIndex.php';
                echo "<br>";
            }
        ?>
    </div>
    <div id="details">
    <?php
            include 'runningProjectDetails.php';
        } else
            echo "No Project is Running";
    ?>
    </div>
</div>