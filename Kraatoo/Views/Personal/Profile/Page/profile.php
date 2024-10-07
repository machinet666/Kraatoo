<?php
require_once('../../../../Entity/personal.php');
require_once('../../../../Entity/experience.php');
require_once('../../../../Controller/fillUpValue.php');
require_once('/opt/lampp/htdocs/Kraatoo/Controller/fillUpValue.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/user.php');
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
    include '../../header.php';
    ?>
    <div style="display: flex; margin-top: 20px;">
        <aside>
            <img src="../../../Image/pngwin.png" style="width: 120px; height: 120px">

            <div>
                <?php echo $_SESSION['user']->firstName ?><br>
                <a href="../../../../Controller/changePasswordCheck.php?type=<?php echo "Personal" ?>">Change Password</a>
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

                if ($_SESSION['personalEditMode']) {
                    include 'personal_info_edit.php';
                } else {
                    include 'personal_info.php';
                }
                if ($_SESSION['academicEditMode']) {
                    include 'academic_info_edit.php';
                } else {
                    include 'academic_info.php';
                }

                if ($_SESSION['jobEditMode']) {
                    include 'job_info_edit.php';
                } else {
                    include 'job_info.php';
                }

                if ($_SESSION['othersEditMode']) {
                    include 'others_info_edit.php';
                } else {
                    include 'others_info.php';
                }

                ?>

                <h2>Upload your CV</h2>
                <form method="post" enctype="multipart/form-data">
                    <input type="file" name="cv"><br>
                    <div>
                        <button type="submit">Upload</button>
                    </div>
                </form>
                <br><br>
                <?php
                if (!$_SESSION['user']->isAFreelancer) {
                    include 'joinFreelancer.php';
                }
                ?>
            </fieldset>
        </main>
    </div>
    <hr>
    <?php
    include '../../../footer.php';
    ?>

</body>

</html>

<?php
foreach ($_SESSION['fillUpErrorPersonal'] as $key => $value) {
    $_SESSION['fillUpErrorPersonal'][$key] = '';
}


foreach ($_SESSION['fillUpErrorFreelancer'] as $key => $value) {
    $_SESSION['fillUpErrorFreelancer'][$key] = '';
}

$_SESSION['freelancerError'] = '';

valueAssignPersonalInfo();

$_SESSION['check'] = "close";
$_SESSION['PasswordErrorCurrent'] = "";
$_SESSION['PasswordErrorNew'] = "";
$_SESSION['PasswordErrorWrong'] = "";



?>