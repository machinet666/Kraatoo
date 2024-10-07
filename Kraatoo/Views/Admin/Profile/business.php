<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/business.php');
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
    <link rel="stylesheet" href="../Design/businessProfile.css">

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
                <h2>Business Information</h2>
                <p>Business Name: <?php echo $_SESSION['user']->name ?> </p>
                <p>Business Type: <?php echo $_SESSION['user']->type ?></p>
                <p>Business Size: <?php echo $_SESSION['user']->numberofemployees ?></p>
                <p>Year of Establishment: <?php echo $_SESSION['user']->yearofestablishment ?> </p>
                <p>Trade License Number: <?php echo $_SESSION['user']->tradelicenseno ?> </p>
            </div>
            <div>
                <h2>Conatct Us</h2>
                <p>Business Email: <?php echo $_SESSION['user']->contact->email ?> </p>
                <p>Business Phone Number: <?php echo $_SESSION['user']->contact->phoneNumber ?> </p>
                <p>Business Address: <?php echo $_SESSION['user']->contact->address ?> </p>
                <p>Website URL: <?php echo $_SESSION['user']->websiteurl  ?> </p>
            </div>
            <div>
                <h2>Conatct Person</h2>
                <p>Contact Person Name: <?php echo $_SESSION['user']->cName  ?> </p>
                <p>Contact Person Number: <?php echo $_SESSION['user']->cNumber ?> </p>
                <p>Contact Person Email: <?php echo $_SESSION['user']->cNumber ?> </p>
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