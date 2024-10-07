<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal_Login</title>
    <link rel="stylesheet" href="design.css ">
</head>

<body>
    <header>
        <h1> Kraatoo </h1>
        <div class="sign">
            <p>Don't have an account? <br> <a href="">Register </a></p>
        </div>
    </header>

    <main>
        <article>
            Login
        </article><br>
        <fieldset>
            <form method="POST" action="../../Controller/login.php">
                <br><br>
                <div class="form">
                    Email: <input type="text" name="email"><br><br>
                    Pass: <input type="password" name="pass"><br>
                    <div class="login">
                        <button name="login">Log in</button>
                    </div>
                </div>

            </form>
        </fieldset>
        <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['logInError']))
            echo $_SESSION['logInError'];
        $_SESSION['logInError'] = '';
        ?>
    </main>

</body>

</html>