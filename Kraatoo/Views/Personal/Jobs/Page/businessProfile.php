<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/personal.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/business.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include '../../header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>
    <aside>
        <img src="../../../Image/pngwin.png" style="width: 120px; height: 120px">
    </aside>
    <main>
        <fieldset>
            <div>
                <h2>Business Information</h2>
                <p>Business Name: <?php echo $_SESSION['allJobPublisher'][$_GET['option']][$_GET['index']]->name; ?> </p>
                <p>Business Type: <?php echo $_SESSION['allJobPublisher'][$_GET['option']][$_GET['index']]->type ?></p>
                <p>Business Size: <?php echo $_SESSION['allJobPublisher'][$_GET['option']][$_GET['index']]->numberofemployees ?></p>
                <p>Year of Establishment: <?php echo $_SESSION['allJobPublisher'][$_GET['option']][$_GET['index']]->yearofestablishment ?> </p>
                <p>Trade License Number: <?php echo $_SESSION['allJobPublisher'][$_GET['option']][$_GET['index']]->tradelicenseno ?> </p>
            </div>
            <div>
                <h2>Conatct Us</h2>
                <p>Business Email: <?php echo $_SESSION['allJobPublisher'][$_GET['option']][$_GET['index']]->contact->email; ?> </p>
                <p>Business Phone Number: <?php echo $_SESSION['allJobPublisher'][$_GET['option']][$_GET['index']]->contact->phoneNumber; ?> </p>
                <p>Business Address: <?php echo $_SESSION['allJobPublisher'][$_GET['option']][$_GET['index']]->contact->address; ?> </p>
                <p>Website URL: <?php echo $_SESSION['allJobPublisher'][$_GET['option']][$_GET['index']]->websiteurl; ?> </p>
            </div>
            <div>
                <h2>Conatct Person</h2>
                <p>Contact Person Name: <?php echo $_SESSION['allJobPublisher'][$_GET['option']][$_GET['index']]->cName; ?> </p>
                <p>Contact Person Number: <?php echo $_SESSION['allJobPublisher'][$_GET['option']][$_GET['index']]->cNumber; ?> </p>
                <p>Contact Person Email: <?php echo $_SESSION['allJobPublisher'][$_GET['option']][$_GET['index']]->cEmail; ?> </p>
            </div>
        </fieldset>
    </main>
</body>

</html>