<?php
require_once('/opt/lampp/htdocs/Kraatoo/Controller/fillUpValue.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/job.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/job.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/application.php');


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function profile()
{
    $_SESSION['check'] = "close";
    $_SESSION['businessInfoEditMode'] = false;
    $_SESSION['businessContactEditMode'] = false;
    $_SESSION['businessContactPersonEditMode'] = false;

    valueAssignBusinessInfo();

    $_SESSION['fillUpErrorBusinessInfo'] = [

        'name' => '',
        'type' => '',
        'numberofemployees' => '',
        'yearofestablishment' => '',
        'tradelicenseno' => ''
    ];
    $_SESSION['fillUpErrorBusinessContactInfo'] = [

        'email' => '',
        'phoneNumber' => '',
        'websiteurl' => '',
        'address' => '',
        'emailAvailibility' => ''
    ];

    $_SESSION['fillUpErrorBusinessPersonalContactInfo'] = [
        'cName' => '',
        'cNumber' => '',
        'cEmail' => ''
    ];

    $_SESSION['includeName'] = '../../../../Controller/Business/redirect.php?';

    header('location: ../../Views/Business/Profile/Page/profile.php');
}

function jobs()
{
    valueAndErrorAssignBusinessJobPost();
    $_SESSION['includeName'] = '../../../Controller/Business/redirect.php?';
    header('location: ../../Views/Business/Job/page.php');
}

function applicants()
{
    // echo $_SESSION['user']->userID;
    $_SESSION['includeName'] = '../../../../Controller/Business/redirect.php?';

    $_SESSION['allJobsCircularBusiness'] = retrieveJobBusiness();
    $_SESSION['allApplicantsForBusiness'] = [];
    foreach ($_SESSION['allJobsCircularBusiness'] as $value) {
        $_SESSION['allApplicantsForBusiness'][$value->jobID] = retrieveApplicantsBusiness($value->jobID);
    }

    if (count($_SESSION['allJobsCircularBusiness']))
        header('location: ../../Views/Business/Applicants/Page/main.php?index=0');
    else
        header('location: ../../Views/Business/Applicants/Page/main.php');
}


if (isset($_GET['option'])) {
    if ($_GET['option'] == 'profile') {
        profile();
    } else if ($_GET['option'] == 'jobs') {
        jobs();
    } else if ($_GET['option'] == 'applicants') {
        applicants();
    }
} else {
    //default
    applicants();
    // echo "lock";
}
