<?php
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
    <title>Profile</title>
    <link rel="stylesheet" href="../design.css">

</head>

<body>
    <header>
        <h1> Kraatoo </h1>
        <nav>
            <h2><a href="../../../Controller/Admin/Redirect/personal.php">Personal</h2>
            <h2><a href="../../../Controller/Admin/Redirect/business.php">Business</a></h2>
            <h2><a href="../../../Controller/Admin/Redirect/client.php">Client</a></h2>
        </nav>
    </header>
    <aside>
        <img src="../../Image/pngwin.png" style="width: 120px; height: 120px">

    </aside>

    <main>
        <fieldset>
            <div>
                <h2>Client Information</h2>
                <p>Fisrt Name: <?php echo $_SESSION['user']->firstName ?> </p>
                <p>Last Name: <?php echo $_SESSION['user']->lastName ?> </p>
                <p>NID: <?php echo $_SESSION['user']->nid ?> </p>
                <p>Preferred Project Area: <?php echo $_SESSION['user']->projectArea ?> </p>
            </div>
            <div>
                <h2>Organization Info </h2>
                <p>Organization Name: <?php echo $_SESSION['user']->organizationname ?> </p>
                <p>Organization Type: <?php echo $_SESSION['user']->organizationtype ?> </p>
                <p>Website or Social Media page: <?php echo $_SESSION['user']->website ?> </p>
            </div>
            <div>
                <h2>Contact Info</h2>
                <p>Email: <?php echo $_SESSION['user']->contact->email ?> </p>
                <p>Phone Number: <?php echo $_SESSION['user']->contact->phoneNumber ?> </p>
                <p>Address: <?php echo $_SESSION['user']->contact->address ?> </p>
            </div>


        </fieldset>
    </main>
    </div>
    <hr>
    <footer>
        <h3>Kraatoo</h3>
        <p>Browse by: Companies, Jobs, Locations, Communities</p>
        <p>&copy; 2008-2024, Kraatoo LLC. "Kraatoo" and logo are registered trademarks of Kraatoo LLC.</p>
    </footer>

</body>

</html>