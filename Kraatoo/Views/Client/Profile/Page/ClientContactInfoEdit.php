<h2>Conatct Info </h2>
<form method="POST" action="../../../../Controller/Client/Profile/updateClientContactInfo.php">
    Email: <input type="text" name="email" value="<?php echo $_SESSION['fillUpValue']['email'] ?>"> 
    <label for="email"><?php echo $_SESSION['fillUpErrorClientContactInfo']['email'], $_SESSION['fillUpErrorClientContactInfo']['emailAvailibility'] ?></label>
    <br><br>
    Phone Number: <input type="text" name="phoneNumber" value="<?php echo $_SESSION['fillUpValue']['phoneNumber'] ?>"> 
    <label for="phoneNumber"><?php echo $_SESSION['fillUpErrorClientContactInfo']['phoneNumber'] ?></label>
    <br><br>
    Address: <input type="text" name="address" value="<?php echo $_SESSION['fillUpValue']['address'] ?>"> 
    <label for="address"><?php echo $_SESSION['fillUpErrorClientContactInfo']['address'] ?></label>
    <br><br>
    <input type="submit" name="updateClientContactInfo" value="Update Information"> <br><br>
</form>


