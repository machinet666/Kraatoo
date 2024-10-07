<?php
require_once('../../fillUpValue.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/client.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function updateCheckClientorgInfo()
{
    $flag = true;
    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            $_SESSION['fillUpErrorClientOrganizationInfo'][$key] = "*Can't update empty field";
            $flag = false;
        }
        $_SESSION['fillUpValue'][$key] = $value;
    }
    return $flag;
}

if ($_SESSION['clientOrganizationEditMode']) 
{
    if (isset($_POST['updateClientOrganizationInfo']) && updateCheckClientorgInfo()) 
    {
        valueAssignClientInfoReverse();
        $client = new client($_POST['organizationname'], $_POST['organizationtype'], $_POST['website']);
        $client->userID = $_SESSION['user']->userID;
        updateClientOrganizationInfo($client);
        $_SESSION['clientOrganizationEditMode'] = false;
    }
} 
else 
{
    valueAssignClientInfo();
    $_SESSION['clientOrganizationEditMode'] = true;
    $_SESSION['clientInfoEditMode'] = false;
    $_SESSION['clientContactEditMode'] = false;
}

header('location: ../../../Views/Client/Profile/Page/profile.php');
