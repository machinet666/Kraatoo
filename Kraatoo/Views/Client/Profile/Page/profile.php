<?php
require_once('../../../../Entity/client.php');
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
    <link rel="stylesheet" href="../../header.css">

</head>

<body>
    <?php
    //$_SESSION['credential']->type
    include "../../header.php";
    ?>
    <div style="display: flex; margin-top: 20px;">
        <aside>
            <img src="../../../Image/pngwin.png" style="width: 120px; height: 120px">
            <form>
                <input type="file" id="image" name="image" accept="image/*"><br><br>
                <input type="submit" value="Upload Image">
            </form>
            <div>
                <?php echo $_SESSION['user']->firstName ?><br>
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
                if ($_SESSION['clientInfoEditMode']) {
                    include 'clientInformationEdit.php';
                } else {
                    include 'clientInformation.php';
                }

                if ($_SESSION['clientOrganizationEditMode']) {
                    include 'clientOraganizationInfoEdit.php';
                } else {
                    include 'clientOraganizationInfo.php';
                }
                if ($_SESSION['clientContactEditMode']) {
                    include 'ClientContactInfoEdit.php';
                } else {
                    include 'ClientContactInfo.php';
                }


                ?>

            </fieldset>
        </main>
    </div>
    <hr>
    <?php
    include "../../../footer.php";
    ?>
</body>

</html>

<?php
foreach ($_SESSION['fillUpErrorClientInfo'] as $key => $value) {
    $_SESSION['fillUpErrorClientInfo'][$key] = '';
}

foreach ($_SESSION['fillUpErrorClientOrganizationInfo'] as $key => $value) {
    $_SESSION['fillUpErrorClientOrganizationInfo'][$key] = '';
}
foreach ($_SESSION['fillUpErrorClientContactInfo'] as $key => $value) {
    $_SESSION['fillUpErrorClientContactInfo'][$key] = '';
}

$_SESSION['check'] = "close";
$_SESSION['PasswordErrorCurrent'] = "";
$_SESSION['PasswordErrorNew'] = "";
$_SESSION['PasswordErrorWrong'] = "";

?>