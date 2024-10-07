<aside style="margin-right: 70px;">
    <a href="?index=<?php echo $_SESSION['currentIndex']; ?>&option=<?php echo $_GET['option']; ?>" style="text-decoration: none;">
        <fieldset id="index">
            <b><?php echo $_SESSION['allJobPublisher'][$_GET['option']][$_SESSION['currentIndex']]->name; ?></b><br>
            <?php echo $_SESSION['allJobsCircular'][$_GET['option']][$_SESSION['currentIndex']]->title; ?><br>
            <?php echo $_SESSION['allJobsCircular'][$_GET['option']][$_SESSION['currentIndex']]->type; ?><br>
            <?php echo $_SESSION['allJobsCircular'][$_GET['option']][$_SESSION['currentIndex']]->salaryRange; ?><br>
        </fieldset>
    </a>
</aside>