<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/personal.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/client.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publisher Profile</title>
</head>

<body>
    <?php
    include '../../header.php';
    ?>
    <aside>
        <img src="../../../Image/pngwin.png" style="width: 120px; height: 120px">
        <div>Hasin666</div>
        <div>
            <a href="">Sign Out</a><br>
            <a href="#">Change Password</a>
        </div>
        <main>
            <div>
                <h2>Client Information</h2>
                <p>Fisrt Name: <?php echo $_SESSION['projectPublisher']->firstName ?> </p>
                <p>Last Name: <?php echo $_SESSION['projectPublisher']->lastName ?> </p>
                <p>NID: <?php echo $_SESSION['projectPublisher']->nid ?> </p>
                <p>Preferred Project Area: <?php echo $_SESSION['projectPublisher']->projectArea ?> </p>
            </div>

            <div>
                <h2>Organization Info</h2>
                <p>Organization Name: <?php echo $_SESSION['projectPublisher']->organizationname ?> </p>
                <p>Organization Type: <?php echo $_SESSION['projectPublisher']->organizationtype ?> </p>
                <p>Website or Social Media page: <?php echo $_SESSION['projectPublisher']->website ?> </p>
            </div>

            <div>
                <h2>Contact Info</h2>
                <p>Email: <?php echo $_SESSION['projectPublisher']->contact->email ?> </p>
                <p>Phone Number: <?php echo $_SESSION['projectPublisher']->contact->phoneNumber ?> </p>
                <p>Address: <?php echo $_SESSION['projectPublisher']->contact->address ?> </p>
            </div>
        </main>
</body>

</html>