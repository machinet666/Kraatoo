<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Post a Job</title>
    <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="job.css">
</head>

<body>
    <?php
    include '../header.php';
    ?>
    <br><br>
    <div style="display: flex; justify-content: center;">
        <div>
            <br><br>
            <h1>Seeking for a Employee? Post a job now</h1>
            <fieldset>
                <form method="POST" action="../../../Controller/Business/Jobs/jobPost.php">
                    <br><label for="jobTitle">Job Title</label><br>
                    <input type="text" name="jobTitle" value="<?php echo $_SESSION['fillUpValueJobPost']['jobTitle'] ?>"><br>
                    <label><?php echo $_SESSION['fillUpErrorJobPost']['jobTitle'] ?></label><br><br>

                    <label for="jobType">Job Type</label><br>
                    <select name="jobType">
                        <option value="">...Select one...</option>
                        <option value="Full Time" <?php if ($_SESSION['fillUpValueJobPost']['jobType'] == 'fullTime') {
                                                        echo 'selected';
                                                    } ?>>Full Time</option>
                        <option value="Part Time" <?php if ($_SESSION['fillUpValueJobPost']['jobType'] == 'partTime') {
                                                        echo 'selected';
                                                    } ?>>Part Time</option>
                        <option value="Contract" <?php if ($_SESSION['fillUpValueJobPost']['jobType'] == 'contract') {
                                                        echo 'selected';
                                                    } ?>>Contract</option>
                        <option value="Internship" <?php if ($_SESSION['fillUpValueJobPost']['jobType'] == 'internship') {
                                                        echo 'selected';
                                                    } ?>>Internship</option>
                    </select><br>
                    <label><?php echo $_SESSION['fillUpErrorJobPost']['jobType'] ?></label><br><br>

                    <label for="jobLocation">Job Location</label><br>
                    <input type="text" name="jobLocation" value="<?php echo $_SESSION['fillUpValueJobPost']['jobLocation'] ?>"><br>
                    <label><?php echo $_SESSION['fillUpErrorJobPost']['jobLocation'] ?></label><br><br>

                    <label for="aboutUs">About Us</label><br>
                    <textarea name="aboutUs"><?php echo $_SESSION['fillUpValueJobPost']['aboutUs'] ?></textarea><br>
                    <label><?php echo $_SESSION['fillUpErrorJobPost']['aboutUs'] ?></label><br><br>

                    <label for="overview">Overview</label><br>
                    <textarea name="overview"><?php echo $_SESSION['fillUpValueJobPost']['overview'] ?></textarea><br>
                    <label><?php echo $_SESSION['fillUpErrorJobPost']['overview'] ?></label><br><br>

                    <label for="salary">Salary</label><br>
                    <input type="number" name="salaryFrom" value="<?php echo $_SESSION['fillUpValueJobPost']['salaryFrom'] ?>"> to
                    <input type="number" name="salaryTo" value="<?php echo $_SESSION['fillUpValueJobPost']['salaryTo'] ?>">
                    <select name='currency'>
                        <option selected>$</option>
                        <option>€</option>
                        <option>£</option>
                    </select>

                    <select name='salarytime'>
                        <option selected>Per hour</option>
                        <option>Weekly</option>
                        <option>Monthly</option>
                    </select>

                    <label><?php echo $_SESSION['fillUpErrorJobPost']['salaryFrom'] ?></label>
                    <label style="margin-left: 200px;"><?php echo $_SESSION['fillUpErrorJobPost']['salaryTo'] ?></label><br><br>
                    <div style="margin-left: 420px;">
                        <button type="submit" name="post" style="padding: 5px 15px; font-size: 18px; background-color: #339cff; color: white; border: none; cursor: pointer;">
                            Post
                        </button>
                    </div>

                </form>
            </fieldset>
        </div>
    </div>


    <br><br><br><br><br><br>
    <hr>
    <?php
    include '../../../Views/footer.php';
    ?>


</body>

</html>


<?php
foreach ($_SESSION['fillUpErrorJobPost'] as $key => $value) {
    $_SESSION['fillUpErrorJobPost'][$key] = '';
}

?>