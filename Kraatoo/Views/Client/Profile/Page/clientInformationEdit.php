<h2>Client Information </h2>
<form method="POST" action="../../../../Controller/Client/Profile/updateClientInfo.php">
    Fisrt Name: <input type="text" name="firstName" value="<?php echo $_SESSION['fillUpValue']['firstName'] ?>"> 
    <label for="firstName"><?php echo $_SESSION['fillUpErrorClientInfo']['firstName'] ?></label>
    <br><br>
    Last Name: <input type="text" name="lastName" value="<?php echo $_SESSION['fillUpValue']['lastName'] ?>"> 
    <label for="lastName"><?php echo $_SESSION['fillUpErrorClientInfo']['lastName'] ?></label>
    <br><br>
    NID: <input type="text" name="nid" value="<?php echo $_SESSION['fillUpValue']['nid'] ?>"> 
    <label for="nid"><?php echo $_SESSION['fillUpErrorClientInfo']['nid'] ?></label>
    <br><br>
    Preferred Project Area: <input type="text" name="projectArea" value="<?php echo $_SESSION['fillUpValue']['projectArea'] ?>"> 
    <label for="projectArea"><?php echo $_SESSION['fillUpErrorClientInfo']['projectArea'] ?></label>
    <br><br>
    <input type="submit" name="UpdateClientInformation" value="Update Information"> <br><br>
</form>