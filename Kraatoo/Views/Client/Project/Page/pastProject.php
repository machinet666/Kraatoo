<div style="display: flex; margin-left: 350px">
    <div id="index">
        <?php
        if (count($_SESSION['allPastProjectForClient']) != 0) {
            for ($index = 0; $index < count($_SESSION['allPastProjectForClient']); $index++) {
                $_SESSION['currentIndex'] = $index;
                include 'pastProjectIndex.php';
                echo "<br>";
            }
        ?>
    </div>
    <div id="details">
    <?php
            include 'pastProjectDetails.php';
        } else
            echo "No Project is Running";
    ?>
    </div>
</div>