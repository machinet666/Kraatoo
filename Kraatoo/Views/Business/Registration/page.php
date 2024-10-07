<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Registration</title>
</head>

<body>
    <header>
        <h1> Kraatoo </h1>
        <p>already have an account? <br> <a href="../../Log In/login.php">Sign in </a></p>
    </header>
    <br><br>
    <main>
        <article>
            Business Profile Registration
        </article><br><br>
        <fieldset>
        
        <form method="POST" action="../../../Controller/Business/register.php">
            Business Name <input type="text" name="name" value="<?php echo $_SESSION['fillUpValue']['name']; ?>">
            <label for = "name"> <?php echo $_SESSION['fillUpError']['name'] ?></label>
            <br><br>
            Business Type 
            <select name="type">
                <option value="" disabled selected>...Select one...</option>
                <option value="News and Media"  <?php if ($_SESSION['fillUpValue']['type'] == 'News and Media') {echo 'selected';} ?>>News and Media</option>
                <option value="Software Firm" <?php if ($_SESSION['fillUpValue']['type'] == 'Software Firm') {echo 'selected';} ?>>Software Firm</option>
                <option value="Agency" <?php if ($_SESSION['fillUpValue']['type'] == 'Agency') {echo 'selected';} ?>>Agency</option>
                <option value="Banking and Finance" <?php if ($_SESSION['fillUpValue']['type'] == 'Banking and Finance') {echo 'selected';} ?>>Banking and Finance</option>
                <option value="Fashion and Clothings" <?php if ($_SESSION['fillUpValue']['type'] == 'Fashion and Clothings') {echo 'selected';} ?>>fashion and clothings</option>
                <option value="Information Technology" <?php if ($_SESSION['fillUpValue']['type'] == 'Information Technology') {echo 'selected';} ?>>Information and Technology</option>
                <option value="Food Chain and Hotel Management" <?php if ($_SESSION['fillUpValue']['type'] == 'Food Chain and Hotel Management') {echo 'selected';} ?>>Food Chain and Hotel Management</option>
                <option value="Telecommunication" <?php if ($_SESSION['fillUpValue']['type'] == 'Telecommunication') {echo 'selected';} ?>>Telecommunication</option>\
                <option value="Others" <?php if ($_SESSION['fillUpValue']['type'] == 'Others') {echo 'selected';} ?>>Others</option>
            </select>
            <label for="type"> <?php echo $_SESSION['fillUpError']['type'] ?> </label><br><br>
            <br><br>
            Business Size <input type="text" name="numberofemployees" value="<?php echo $_SESSION['fillUpValue']['numberofemployees']; ?>">
            <label for = "numberofemployees"> <?php echo $_SESSION['fillUpError']['numberofemployees']?></label>
            <br><br>
            Business Email <input type="text" name="email" value="<?php echo $_SESSION['fillUpValue']['email']; ?>">
            <label for = "email"> <?php echo $_SESSION['fillUpError']['email'].$_SESSION['fillUpError']['emailAvailibility'] ?> </label>
            <br><br>
            Business Address <input type="text" name="address" value="<?php echo $_SESSION['fillUpValue']['address']; ?>">
            <label for = "address"> <?php echo $_SESSION['fillUpError']['address'] ?></label>
            <br><br>
            Business Phone Number <input type="text" name="phonenumber" value="<?php echo $_SESSION['fillUpValue']['phonenumber']; ?>">
            <label for = "name"> <?php echo $_SESSION['fillUpError']['phonenumber'] ?></label>
            <br><br>
            Trade License No <input type="text" name="tradelicenseno" placeholder="..should be number.." value="<?php echo $_SESSION['fillUpValue']['tradelicenseno']; ?>">
            <label for = "phonenumber"> <?php echo $_SESSION['fillUpError']['tradelicenseno'] ?></label>
            <br><br>
            Business Website URL <input type="text" name="websiteurl" value="<?php echo $_SESSION['fillUpValue']['websiteurl']; ?>">
            <label for = "websiteurl"> <?php echo $_SESSION['fillUpError']['websiteurl'] ?></label>
            <br><br>
            Year of Establishment <input type="text" name="yearofestablishment" value="<?php echo $_SESSION['fillUpValue']['yearofestablishment']; ?>">
            <label for = "yearofestablishment"> <?php echo $_SESSION['fillUpError']['yearofestablishment'] ?></label>
            <br><br>
            Contact Person Name <input type="text" name="cName" value="<?php echo $_SESSION['fillUpValue']['cName']; ?>">
            <label for = "cName"> <?php echo $_SESSION['fillUpError']['cName'] ?></label>
            <br><br>
            Contact Person Email <input type="text" name="cEmail" value="<?php echo $_SESSION['fillUpValue']['cEmail']; ?>">
            <label for = "cEmail" > <?php echo $_SESSION['fillUpError']['cEmail'] ?></label>
            <br><br>
            Contact Person Number <input type="text" name="cNumber" value="<?php echo $_SESSION['fillUpValue']['cNumber']; ?>">
            <label for = "cNumber"> <?php echo $_SESSION['fillUpError']['cNumber'] ?></label>
            <br><br>
            Password <input type="text" name="password" value="<?php echo $_SESSION['fillUpValue']['password']; ?>">
            <label for = "password"> <?php echo $_SESSION['fillUpError']['password'] ?></label>
            <br><br>
            Retype Password <input type="text" name="retypepassword" value="<?php echo $_SESSION['fillUpValue']['retypepassword']; ?>">
            <label for = "retypepassword"> <?php echo $_SESSION['passwordmatch']; ?> </label>
            <br><br>
            <input type="submit" name = "register" value ="Register">
            <input type="reset" value ="Reset">            
        </form>

        </fieldset>

</body>

</html>

<?php
foreach ($_SESSION['fillUpValue'] as $key => $value) 
{
    $_SESSION['fillUpValue'][$key] = '';
}
foreach ($_SESSION['fillUpError'] as $key => $value) 
{
    $_SESSION['fillUpError'][$key] = '';
}
$_SESSION['passwordmatch'] ='';
?>