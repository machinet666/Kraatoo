<div>
    <form method="POST", action="../../../../Controller/Personal/Profile/update_job_info.php">
        Company: <input type="text" name="company" value="<?php echo $_SESSION['fillUpValueJob']['company'] ?>">
        <label for="company"><?php echo $_SESSION['fillUpErrorJob']['company'] ?></label>

        Position: <input type="text" name="position" value="<?php echo $_SESSION['fillUpValueJob']['position']?>">
        <label for="position"><?php echo $_SESSION['fillUpErrorJob']['position'] ?></label>

        Started From <input type="text" name="started from" value="<?php echo $_SESSION['fillUpValueJob']['started from']?>">
        <label for="started from"><?php echo $_SESSION['fillUpErrorJob']['started from'] ?></label>

        To <input type="text" name="to" value="<?php echo $_SESSION['fillUpValueJob']['to']?>"> <br><br>
        <label for="to"><?php echo $_SESSION['fillUpErrorJob']['to'] ?></label>

        <input type="submit" name="submit" value="Update">
    </form>
</div>