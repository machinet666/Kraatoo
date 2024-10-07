<h2>Conatct Person </h2>
<form  method="POST" action="../../../../Controller/Business/Profile/updateBusinessContactPerson.php">
    Contact Person Name: <input type="text" name="cName" value="<?php echo $_SESSION['fillUpValue']['cName'] ?>"> 
    <label for="cName"><?php echo $_SESSION['fillUpErrorBusinessPersonalContactInfo']['cName'] ?></label>
    <br><br>
    Contact Person Number: <input type="text" name="cNumber" value="<?php echo $_SESSION['fillUpValue']['cNumber'] ?>"> 
    <label for="cNumber"><?php echo $_SESSION['fillUpErrorBusinessPersonalContactInfo']['cNumber'] ?></label>
    <br><br>
    Contact Person Email: <input type="text" name="cEmail" value="<?php echo $_SESSION['fillUpValue']['cEmail'] ?>">
    <label for="cEmail"><?php echo $_SESSION['fillUpErrorBusinessPersonalContactInfo']['cEmail'] ?></label>
    <br><br>

    <input type="submit" name="UpdateContactPerson" value="Update Information"> <br><br>
</form>