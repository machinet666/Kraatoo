<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/job.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/personal.php');
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
    <link rel="stylesheet" href="../../header.css">
    <link rel="stylesheet" href="../../../Personal/Profile/design.css">
</head>

<body>
    <?php
    $index = $_GET['index'];
    include '../../header.php';
    ?>
    <h3 style="margin-left: 20px; margin-top: 20px"><a href="../../../../Controller/Client/Project/runningProject.php?index=<?php echo $index; ?>">Back</a></h3>
    <div style="display: flex; margin-top: 20px;">
        <aside>
            <img src="../../../Image/pngwin.png" style="width: 120px; height: 120px">
        </aside>
        <main>
            <fieldset>
                <div>
                    <h2>Personal Information</h2>
                    <p>Name: <?php echo $_SESSION['projectBuilders'][$_GET['index']]->firstName, ' ', $_SESSION['projectBuilders'][$_GET['index']]->lastName; ?> </p>
                    <p>Gender: <?php echo $_SESSION['projectBuilders'][$_GET['index']]->gender ?></p>
                    <p>Date of Birth: <?php echo $_SESSION['projectBuilders'][$_GET['index']]->dateOfBirth ?></p>
                    <p>Email: <?php echo $_SESSION['projectBuilders'][$_GET['index']]->contact->email; ?> </p>
                    <p>Phone Number: <?php echo $_SESSION['projectBuilders'][$_GET['index']]->contact->phoneNumber; ?> </p>
                    <p>Address: <?php echo $_SESSION['projectBuilders'][$_GET['index']]->contact->address; ?></p>
                </div>
                <div>
                    <h2>Academic Information</h2>
                    <p>Bachelor Degree: <?php echo $_SESSION['projectBuilders'][$_GET['index']]->bachelorDegree ?></p>
                    <p>Masters Degree: <?php echo $_SESSION['projectBuilders'][$_GET['index']]->masterDegree ?></p>
                    <p>Specialized Field: <?php echo $_SESSION['projectBuilders'][$_GET['index']]->specilizedField ?></p>
                    <h2>About Yourself</h2>
                    <p><?php echo $_SESSION['projectBuilders'][$_GET['index']]->aboutYourself ?></p>
                </div>
            </fieldset>
        </main>
    </div>
    <?php
    echo "<br><br><br><br><br><br><br><br><br><br><br>";
    include '../../../footer.php';
    ?>
</body>

</html>