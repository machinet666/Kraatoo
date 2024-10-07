<div>
    <h2>Other Information</h2><br>
    <label><?php echo $_SESSION['freelancerError']; ?></label>
    <form method="post" action="../../../../Controller/Personal/Profile/update_others_info.php">
        <label for="skillList">Skill and Expertise:</label>
        <input type="text" name="skillList" value="<?php echo $_SESSION['fillUpValue']['skillList'] ?>">
        <label for="skillList"> <?php echo $_SESSION['fillUpErrorFreelancer']['skillList'] ?> </label>

        <br><br>

        <label for="tin">TIN:</label>
        <input type="text" name="tin" value="<?php echo $_SESSION['fillUpValue']['tin'] ?>">
        <label for="tin"> <?php echo $_SESSION['fillUpErrorFreelancer']['tin'] ?></label>

        <br><br>

        <label for="aboutYourself">About Yourself:</label>
        <textarea name="aboutYourself"><?php echo $_SESSION['fillUpValue']['aboutYourself'] ?></textarea>
        <label for="aboutYourself"><?php echo $_SESSION['fillUpErrorFreelancer']['aboutYourself'] ?></label>

        <br><br>

        <input type="submit" name="othersInfo" value="Update Information">
    </form>
</div><br>
