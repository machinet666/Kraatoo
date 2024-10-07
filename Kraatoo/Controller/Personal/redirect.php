<?php
require_once('/opt/lampp/htdocs/Kraatoo/Controller/fillUpValue.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/job.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/business.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/application.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/project.php');
// require_once('/opt/lampp/htdocs/Kraatoo/Entity/job.php');
// require_once('/opt/lampp/htdocs/Kraatoo/Entity/business.php');


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function profile()
{
    $_SESSION['check'] = "close";
    $_SESSION['PasswordErrorCurrent'] = "";
    $_SESSION['PasswordErrorNew'] = "";
    $_SESSION['PasswordErrorWrong'] = "";





    $_SESSION['personalEditMode'] = false;
    $_SESSION['academicEditMode'] = false;
    $_SESSION['jobEditMode'] = false;
    $_SESSION['othersEditMode'] = false;

    valueAssignPersonalInfo();

    $_SESSION['fillUpErrorPersonal'] =
        [
            'firstName' => '',
            'lastName' => '',
            'gender' => '',
            'dateOfBirth' => '',
            'email' => '',
            'phoneNumber' => '',
            'address' => '',
            'emailAvailibility' => ''
        ];

    $_SESSION['fillUpErrorFreelancer'] =
        [
            'skillList' => '',
            'tin' => '',
            'aboutYourself' => ''

        ];

    $_SESSION['freelancerError'] = '';

    $_SESSION['fillUpErrorJob'] =
        [
            'company' => '',
            'position' => '',
            'started from' => '',
            'to' => '',
        ];

    $_SESSION['conversion'] = false;

    header('location: ../../Views/Personal/Profile/Page/profile.php');
}

function community()
{
    $_SESSION['jobEditMode'] = false;
    $_SESSION['personalEditMode'] = false;
    $_SESSION['academicEditMode'] = false;
    $_SESSION['othersEditMode'] = false;

    header('location: ../../Views/Personal/Community/Page/main.php');
}

function jobs()
{
    $application = retrieveApplication($_SESSION['user']->userID);
    $_SESSION['allJobsCircular'] = retrieveAllJob($application);

    $_SESSION['allJobPublisher'] =
        [
            'Applied' => [],
            'Browse' => [],
        ];

    for ($i = 0; $i < count($_SESSION['allJobsCircular']['Applied']); $i++) {
        $_SESSION['allJobPublisher']['Applied'][$i] = retreiveBusiness($_SESSION['allJobsCircular']['Applied'][$i]->userID);
    }

    for ($i = 0; $i < count($_SESSION['allJobsCircular']['Browse']); $i++) {
        $_SESSION['allJobPublisher']['Browse'][$i] = retreiveBusiness($_SESSION['allJobsCircular']['Browse'][$i]->userID);
    }

    // print_r($_SESSION['allJobPublisher']['Applied']);
    // echo "<br><br>";
    // print_r($_SESSION['allJobPublisher']['Browse']);

    header('location: Jobs/circular.php?option=Applied');
}

function project()
{
    unset($_SESSION['projectPublisher']);
    $_SESSION['retreiveAllPendingProjectForFreelancer'] = retreiveAllPendingProjectForFreelancer($_SESSION['user']->userID);
    if (count($_SESSION['retreiveAllPendingProjectForFreelancer']) == 0)
        header('location: Project/retrivePublisher.php');
    else
        header('location: Project/retrivePublisher.php?index=0');
}

if (isset($_GET['option'])) {
    if ($_GET['option'] == 'profile') {
        profile();
    } else if ($_GET['option'] == 'community') {
        community();
    } else if ($_GET['option'] == 'jobs') {
        jobs();
    } else if ($_GET['option'] == 'project') {
        project();
    }
} else {
    profile();
}
