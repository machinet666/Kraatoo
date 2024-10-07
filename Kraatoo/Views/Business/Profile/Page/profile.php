<?php
// require_once('../../../../Entity/business.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/business.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/user.php');
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
    <link rel="stylesheet" href="../design.css">

</head>

<body>
    <?php
    include '../../header.php';
    ?>
    <div style="display: flex; margin-top: 20px;">
        <aside>
            <img src="../../../Image/pngwin.png" style="width: 120px; height: 120px">
            <div>
                <?php echo $_SESSION['user']->name ?><br>
                <a href="../../../../Controller/changePasswordCheck.php?type=<?php echo $_SESSION['credential']->type ?>">Change Password</a>
                <br><br>
                <?php
                if ($_SESSION['check'] == "open")
                    include "../../../changePassword.php";
                ?>
            </div>
        </aside>

        <main>
            <fieldset>
                <?php
                if ($_SESSION['businessInfoEditMode']) {
                    include 'businessInformationEdit.php';
                } else {
                    include 'businessInformation.php';
                }

                if ($_SESSION['businessContactEditMode']) {
                    include 'businessContactEdit.php';
                } else {
                    include 'businessContact.php';
                }

                if ($_SESSION['businessContactPersonEditMode']) {
                    include 'businessContactPersonEdit.php';
                } else {
                    include 'businessContactPerson.php';
                }

                ?>


            </fieldset>
        </main>
    </div>
    <?php echo "<br><br><br><br><br><br><br><br><br>"; ?>
    <hr>
    <?php
    include '../../../footer.php';
    ?>

</body>

</html>

<?php
foreach ($_SESSION['fillUpErrorBusinessInfo'] as $key => $value) {
    $_SESSION['fillUpErrorBusinessInfo'][$key] = '';
}

foreach ($_SESSION['fillUpErrorBusinessContactInfo'] as $key => $value) {
    $_SESSION['fillUpErrorBusinessContactInfo'][$key] = '';
}

foreach ($_SESSION['fillUpErrorBusinessPersonalContactInfo'] as $key => $value) {
    $_SESSION['fillUpErrorBusinessPersonalContactInfo'][$key] = '';
}


$_SESSION['check'] = "close";
$_SESSION['PasswordErrorCurrent'] = "";
$_SESSION['PasswordErrorNew'] = "";
$_SESSION['PasswordErrorWrong'] = "";
?>