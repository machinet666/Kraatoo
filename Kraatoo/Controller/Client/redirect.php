<?php
require_once('/opt/lampp/htdocs/Kraatoo/Controller/fillUpValue.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/project.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function profile()
{
    $_SESSION['check'] = "close";
    $_SESSION['clientInfoEditMode'] = false;
    $_SESSION['clientContactEditMode'] = false;
    $_SESSION['clientOrganizationEditMode'] = false;


    valueAssignClientInfo();

    $_SESSION['fillUpErrorClientInfo'] = [

        'firstName' => '',
        'lastName' => '',
        'nid' => '',
        'projectArea' => ''

    ];

    $_SESSION['fillUpErrorClientOrganizationInfo'] = [

        'organizationname' => '',
        'organizationtype' => '',
        'website' => ''

    ];

    $_SESSION['fillUpErrorClientContactInfo'] = [

        'email' => '',
        'phoneNumber' => '',
        'address' => '',
        'emailAvailibility' => ''

    ];

    // header('location: ../Views/Client/Profile/Page/profile.php');
    header('location: ../../Views/Client/Profile/Page/profile.php');
}

function project()
{
    header('location: Project/redirect.php');
}

function response()
{
    $_SESSION['accept'] = [];
    $_SESSION['retreiveAllPendingProjectForClient'] = retreiveAllPendingProjectForClient($_SESSION['user']->userID);
    if (count($_SESSION['retreiveAllPendingProjectForClient']) == 0)
        header('location: Response/retriveResponse.php');
    else
        header('location: Response/retriveResponse.php?index=0');
}


if (isset($_GET['option'])) {
    if ($_GET['option'] == 'profile')
        profile();
    else if ($_GET['option'] == 'project')
        project();
    else
        response();
} else {
    profile();
}
