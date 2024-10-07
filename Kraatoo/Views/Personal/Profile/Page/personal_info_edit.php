<div>
    <h2>Personal Information</h2>
    <form action="../../../../Controller/Personal/Profile/update_personal_info.php" method="POST">
        <p>
            <label for="firstName">First Name:</label>
            <input type="text" name="firstName" value="<?php echo $_SESSION['fillUpValue']['firstName']; ?>"><br>
            <label for="firstName"> <?php echo $_SESSION['fillUpErrorPersonal']['firstName'] ?> </label><br>
        </p>
        <p>
            <label for="lastName">Last Name:</label>
            <input type="text" name="lastName" value="<?php echo $_SESSION['fillUpValue']['lastName']; ?>"><br>
            <label for="lastName"> <?php echo $_SESSION['fillUpErrorPersonal']['lastName'] ?> </label><br>
        </p>
        <p>
            <label for="gender">Gender:</label>

            <input type="radio" name="gender" value="male" <?php if ($_SESSION['fillUpValue']['gender'] == 'male') echo 'checked'; ?>>
            <label for="male">Male</label>

            <input type="radio" name="gender" value="female" <?php if ($_SESSION['fillUpValue']['gender'] == 'female') echo 'checked'; ?>>
            <label for="female">Female</label>

            <input type="radio" name="gender" value="others" <?php if ($_SESSION['fillUpValue']['gender'] == 'others') echo 'checked'; ?>>
            <label for="others">Others</label><br>
            <label for="gender"> <?php echo $_SESSION['fillUpErrorPersonal']['gender'] ?> </label><br>
        </p>

        <p>
            <label for="dateOfBirth">Date of Birth:</label>
            <input type="date" name="dateOfBirth" value="<?php echo $_SESSION['fillUpValue']['dateOfBirth']; ?>"><br>
            <label for="dateOfBirth"> <?php echo $_SESSION['fillUpErrorPersonal']['dateOfBirth'] ?> </label><br>
            
        </p>

        <p>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $_SESSION['fillUpValue']['email']; ?>"><br>
            <label for="email"> <?php echo $_SESSION['fillUpErrorPersonal']['email'].$_SESSION['fillUpErrorPersonal']['emailAvailibility'] ?> </label><br>
        </p>

        <p>
            <label for="phoneNumber">Phone Number:</label>
            <input type="text" name="phoneNumber" value="<?php echo $_SESSION['fillUpValue']['phoneNumber']; ?>"><br>
            <label for="phoneNumber"> <?php echo $_SESSION['fillUpErrorPersonal']['phoneNumber'] ?> </label><br>
        </p>

        <p>
            <label for="address">Address:</label>
            <input type="text" name="address" value="<?php echo $_SESSION['fillUpValue']['address']; ?>"><br>
            <label for="address"> <?php echo $_SESSION['fillUpErrorPersonal']['address'] ?> </label><br>
        </p>

        <p>
            <input type="submit" name="personalInfo" value="Update Information">
        </p>
    </form>
</div><br>