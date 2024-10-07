<h2>Business Information </h2>
<form method="POST" action="../../../../Controller/Business/Profile/updateBusinessInfo.php">
    Business Name: <input type="text" name="name" value="<?php echo $_SESSION['fillUpValue']['name'] ?>"> 
    <label for="name"><?php echo $_SESSION['fillUpErrorBusinessInfo']['name'] ?></label>
    <br><br>
    Business Type: 
    <select name="type">
                <option value="" disabled selected>...Select one...</option>
                <option value="News and Media"  <?php if ($_SESSION['fillUpValue']['type'] == 'News and Media') {echo 'selected';} ?>>News and Media</option>
                <option value="Software Firm" <?php if ($_SESSION['fillUpValue']['type'] == 'Software Firm') {echo 'selected';} ?>>Software Firm</option>
                <option value="Agency" <?php if ($_SESSION['fillUpValue']['type'] == 'Agency') {echo 'selected';} ?>>Agency</option>
                <option value="Banking and Finance" <?php if ($_SESSION['fillUpValue']['type'] == 'Banking and Finance') {echo 'selected';} ?>>Banking and Finance</option>
                <option value="Fashion and Clothings" <?php if ($_SESSION['fillUpValue']['type'] == 'Fashion and Clothings') {echo 'selected';} ?>>fashion and clothings</option>
                <option value="Information Technology" <?php if ($_SESSION['fillUpValue']['type'] == 'Information Technology') {echo 'selected';} ?>>Information and Technology</option>
                <option value="Food Chain and Hotel Management" <?php if ($_SESSION['fillUpValue']['type'] == 'Food Chain and Hotel Management') {echo 'selected';} ?>>Food Chain and Hotel Management</option>
                <option value="Telecommunication" <?php if ($_SESSION['fillUpValue']['type'] == 'Telecommunication') {echo 'selected';} ?>>Telecommunication</option>
                <option value="Others" <?php if ($_SESSION['fillUpValue']['type'] == 'Others') {echo 'selected';} ?>>Others</option>
    </select><br><br>
    
    <label for="type"><?php echo $_SESSION['fillUpErrorBusinessInfo']['type'] ?></label>
    <br><br>
    Business Size: <input type="text" name="numberofemployees" value="<?php echo $_SESSION['fillUpValue']['numberofemployees'] ?>"> 
    <label for="numberofemployees"><?php echo $_SESSION['fillUpErrorBusinessInfo']['numberofemployees'] ?></label>
    <br><br>
    Year of Establishment: <input type="text" name="yearofestablishment" value="<?php echo $_SESSION['fillUpValue']['yearofestablishment'] ?>"> 
    <label for="yearofestablishment"><?php echo $_SESSION['fillUpErrorBusinessInfo']['yearofestablishment'] ?></label>
    <br><br>
    Trade License Number: <input type="text" name="tradelicenseno" value="<?php echo $_SESSION['fillUpValue']['tradelicenseno'] ?>"> 
    <label for="tradelicenseno"><?php echo $_SESSION['fillUpErrorBusinessInfo']['tradelicenseno'] ?></label>
    <br><br>
    <input type="submit" name="UpdateBusinessInformation" value="Update Information"> <br><br>
</form>


