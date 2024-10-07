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
    <title>Admin Page</title>
</head>
<body>

<p><a href="">Create An Admin</a></p>
  
<main style="padding: 170px; margin-left: 500px">
<h1>Admin Registration</h1>
<fieldset style="width: 350px; height: 500px">
    <form method="POST" action="../Controller/Admin/register.php">
        First Name: <input type="text" name="firstname" value="<?php echo $_SESSION['fillUpValue']['firstname']; ?>"><br>
        <label for="firstname"> <?php echo $_SESSION['fillUpError']['firstname'] ?> </label><br><br>
        Last Name: <input type="text" name="lastname" value="<?php echo $_SESSION['fillUpValue']['lastname']; ?>"><br>
        <label for="lastname"> <?php echo $_SESSION['fillUpError']['lastname'] ?> </label><br><br>
        Email: <input type="text" name="email" value="<?php echo $_SESSION['fillUpValue']['email']; ?>"><br>
        <label for="email"> <?php echo $_SESSION['fillUpError']['email'], $_SESSION['fillUpError']['emailAvailibility'] ?> </label><br><br>
        Phone Number: <input type="text" name="phonenumber" value="<?php echo $_SESSION['fillUpValue']['phonenumber']; ?>"><br>
        <label for="phonenumber"> <?php echo $_SESSION['fillUpError']['phonenumber'] ?> </label><br><br>
        Password: <input type="text" name="password" value="<?php echo $_SESSION['fillUpValue']['password']; ?>"><br>
        <label for="password"> <?php echo $_SESSION['fillUpError']['password'] ?> </label><br><br>
        Retype Password: <input type="text" name="retypepassword"><br>
        <label for="retypepassword"> <?php echo $_SESSION['passwordmatch']?> </label><br><br><br>

        <input type="submit" name="register" value="Register">
    </form>
</fieldset>
</main>
 
    
</body>
</html>

<?php
foreach ($_SESSION['fillUpValue'] as $key => $value) 
{
    $_SESSION['fillUpValue'][$key] = '';
    $_SESSION['fillUpError'][$key] = '';
}
$_SESSION['passwordmatch']  ='';

?>