<?php
require_once('../../../Entity/personal.php');

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
            <h2>Personal Information</h2>

            </div>

            <div class="info">
                <p>Name: <?php echo $_SESSION['user']->firstName . ' ' . $_SESSION['user']->lastName; ?> </p>
                <p>Gender: <?php echo $_SESSION['user']->gender; ?></p>
                <p>Date of Birth: <?php echo $_SESSION['user']->dateOfBirth; ?></p>
                <p>Email: <?php echo $_SESSION['user']->contact->email; ?> </p>
                <p>Phone Number: <?php echo $_SESSION['user']->contact->phoneNumber; ?> </p>
                <p>Address: <?php echo $_SESSION['user']->contact->address; ?></p>
            </div>
            </div>
            <h2>Academic Information</h2>

            </div>
            <p>Bachelor Degree: <?php echo $_SESSION['user']->bachelorDegree ?></p>
            <p>Masters Degree: <?php echo $_SESSION['user']->masterDegree ?></p>
            <p>Specialized Field: <?php echo $_SESSION['user']->specilizedField ?></p>
            </div>
            </div>

            <!-- 
                    <div>
                        Job 
                    </div> -->
            <div class="info-header">
                <h2>Other Information</h2>

            </div>
            <p>Skill and Expertise: <?php echo $_SESSION['user']->skillList ?></p>
            <p>TIN: <?php echo $_SESSION['user']->tin ?> </p>
            <p>About Yourself: <?php echo $_SESSION['user']->aboutYourself ?></p>
            </div>
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