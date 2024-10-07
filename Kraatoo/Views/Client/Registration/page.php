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
    <title>Client Registration</title>
</head>

<body>

    <header>
        <h1> Kraatoo </h1>
        <p>already have an account? <br> <a href="../../Log In/login.php">Sign in </a></p>
    </header>

    <br><br>
    <main>
        <article>
            Client Profile Registration
        </article><br><br>
        <fieldset>
            <form method="POST" action="../../../Controller/Client/register.php">
                First Name <input type="text" name="firstname" value="<?php echo $_SESSION['fillUpValue']['firstname']; ?>">
                <label for = "firstname"> <?php echo $_SESSION['fillUpError']['firstname'] ?></label>
                <br><br>
                Last Name <input type="text" name="lastname" value="<?php echo $_SESSION['fillUpValue']['lastname'];?>">
                <label for = "lastname"> <?php echo $_SESSION['fillUpError']['lastname'] ?></label>
                <br><br>
                Organization Name <input type="text" name="organizationname" value="<?php echo $_SESSION['fillUpValue']['organizationname'];?>">
                <label for = "organizationname"> <?php echo $_SESSION['fillUpError']['organizationname'] ?></label>
                <br><br>
                
                Organization Type 
            <select name="organizationtype">
                <option value="" disabled selected>...Select one...</option>
                <option value="Restaurant"  <?php if ($_SESSION['fillUpValue']['organizationtype'] == 'Restaurant') {echo 'selected';} ?>>Restaurant</option>
                <option value="Hospital" <?php if ($_SESSION['fillUpValue']['organizationtype'] == 'Hospital') {echo 'selected';} ?>>Hospital</option>
                <option value="Entertainmaint" <?php if ($_SESSION['fillUpValue']['organizationtype'] == 'Entertainmaint') {echo 'selected';} ?>>Entertainmaint</option>
                <option value="Agency" <?php if ($_SESSION['fillUpValue']['organizationtype'] == 'Agency') {echo 'selected';} ?>>Agency</option>
                <option value="E-Commerce and Online Business" <?php if ($_SESSION['fillUpValue']['organizationtype'] == 'E-Commerce and Online Business') {echo 'selected';} ?>>E-Commerce and Online Business</option>
                <option value="Event Managment" <?php if ($_SESSION['fillUpValue']['organizationtype'] == 'Event Managment') {echo 'selected';} ?>>Event Managment</option>
                <option value="Departmental Store" <?php if ($_SESSION['fillUpValue']['organizationtype'] == 'Departmental Store') {echo 'selected';} ?>>Departmental Store</option>
                <option value="Others" <?php if ($_SESSION['fillUpValue']['organizationtype'] == 'Others') {echo 'selected';} ?>>Others</option>
            </select>
            <label for="organizationtype"> <?php echo $_SESSION['fillUpError']['organizationtype'] ?> </label><br><br>

                Email <input type="text" name="email" value="<?php echo $_SESSION['fillUpValue']['email']; ?>">
                <label for = "email"> <?php echo $_SESSION['fillUpError']['email'].$_SESSION['fillUpError']['emailAvailibility'] ?> </label>
                <br><br>
                Phone Number <input type="text" name="phonenumber" value="<?php echo $_SESSION['fillUpValue']['phonenumber']; ?>">
                <label for = "phonenumber"> <?php echo $_SESSION['fillUpError']['phonenumber'] ?></label>
                <br><br>
                Address <input type="text" name="address" value="<?php echo $_SESSION['fillUpValue']['address']; ?>">
                <label for = "address"> <?php echo $_SESSION['fillUpError']['address'] ?></label>
                <br><br>
                NID <input type="text" name="nid" value="<?php echo $_SESSION['fillUpValue']['nid']; ?>">
                <label for = "nid"> <?php echo $_SESSION['fillUpError']['nid'] ?></label>
                <br><br>
                Website or Social Media page <input type="text" name="website" value="<?php echo $_SESSION['fillUpValue']['website']; ?>">
                <label for = "website"> <?php echo $_SESSION['fillUpError']['website'] ?></label>
                <br><br>
                Preferred project area <input type="text" name="projectArea" value="<?php echo $_SESSION['fillUpValue']['projectArea']; ?>">
                <label for = "projectArea"> <?php echo $_SESSION['fillUpError']['projectArea'] ?></label>
                <br><br>
                Password <input type="text" name="password" value="<?php echo $_SESSION['fillUpValue']['password']; ?>">
                <label for = "password"> <?php echo $_SESSION['fillUpError']['password'] ?></label>
                <br><br>
                Retype Password <input type="text" name="retypepassword" value="<?php echo $_SESSION['fillUpValue']['retypepassword']; ?>">
                <label for = "retypepassword"> <?php echo $_SESSION['passwordmatch']?></label>
                <br><br>
                <input type="date" name="dateofbirth" hidden>
                <input type="submit" name="register" value="Register">
 

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

$_SESSION['passwordmatch']= '';
?>