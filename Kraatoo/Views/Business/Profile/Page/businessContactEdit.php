<h2>Conatct Us</h2>
<form  method="POST" action="../../../../Controller/Business/Profile/updateBusinessContact.php">
    Business Email: <input type="text" name="email" value="<?php echo $_SESSION['fillUpValue']['email'] ?>"> 
    <label for="email"><?php echo $_SESSION['fillUpErrorBusinessContactInfo']['email'], $_SESSION['fillUpErrorBusinessContactInfo']['emailAvailibility']?></label>
    <br><br>
    Business Phone Number: <input type="text" name="phoneNumber" value="<?php echo $_SESSION['fillUpValue']['phoneNumber'] ?>">
    <label for="phoneNumber"><?php echo $_SESSION['fillUpErrorBusinessContactInfo']['phoneNumber'] ?></label>
    <br><br>
    Business Address: <input type="text" name="address" value="<?php echo $_SESSION['fillUpValue']['address'] ?>">
    <label for="address"><?php echo $_SESSION['fillUpErrorBusinessContactInfo']['address'] ?></label>
    <br><br>
    Website URL: <input type="text" name="websiteurl" value="<?php echo $_SESSION['fillUpValue']['websiteurl'] ?>"> 
    <label for="websiteurl"><?php echo $_SESSION['fillUpErrorBusinessContactInfo']['websiteurl'] ?></label>
    <br><br>
    <input type="submit" name="updateBusinessContact" value="Update Information"> <br><br>
</form>