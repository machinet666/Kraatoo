<h2>Organization Info </h2>
<form method="POST" action="../../../../Controller/Client/Profile/updateClientOrganizationInfo.php">
    Organization Name: <input type="text" name="organizationname" value="<?php echo $_SESSION['fillUpValue']['organizationname'] ?>"> 
    <label for="organizationname"><?php echo $_SESSION['fillUpErrorClientOrganizationInfo']['organizationname'] ?></label>
    <br><br>
    Organization Type: <input type="text" name="organizationtype" value="<?php echo $_SESSION['fillUpValue']['organizationtype'] ?>">
    <label for="organizationtype"><?php echo $_SESSION['fillUpErrorClientOrganizationInfo']['organizationtype'] ?></label>
    <br><br>
    Website or Social Media page: <input type="text" name="website" value="<?php echo $_SESSION['fillUpValue']['website'] ?>"> 
    <label for="website"><?php echo $_SESSION['fillUpErrorClientOrganizationInfo']['website'] ?></label>
    <br><br>
    <input type="submit" name="updateClientOrganizationInfo" value="Update Information"> <br><br>
</form>