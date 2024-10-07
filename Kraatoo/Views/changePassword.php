<div>
    <fieldset style="width: 250px; margin-left: -70px;">
        <div style="margin-left: 5px; margin-right: 5px;">
            <form method="POST" action="../../../../Controller/changePasswordCheck.php">
                Current Password: <input type="password" name="currentPassword"><br>
                <?php echo $_SESSION['PasswordErrorCurrent']?><br><br>
              

                New Password: <input type="password" name="newPassword"><br>
                <?php echo $_SESSION['PasswordErrorNew']?><br><br>

                Confirm New Password: <input type="password" name="confirmNewPassword"><br>
                <?php echo $_SESSION['PasswordErrorWrong'] ?><br><br>

                <?php
                if (isset($_SESSION['notMatch']))
                    echo $_SESSION['notMatch'];
                ?>
                <input type="submit" name="change" value="Change Password">
                <input type="hidden" name="type" value="<?php echo $_SESSION['credential']->type ?>">
                <input type="submit" name="cancel" value="Cancel"> <br><br>
            </form>
        </div>
    </fieldset>
</div>