<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/client.php');
// require_once('/opt/lampp/htdocs/Kraatoo/Entity/person.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/client.php');
require_once('/opt/lampp/htdocs/Kraatoo/Controller/fillUpValue.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
function updateCheckClientInfo()
{
    $flag = true;

    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            $_SESSION['fillUpErrorClientInfo'][$key] = "*Can't update empty field";
            $flag = false;
        }
        $_SESSION['fillUpValue'][$key] = $value;
    }
    return $flag;
}


if ($_SESSION['clientInfoEditMode']) 
{

    if (isset($_POST['UpdateClientInformation']) && updateCheckClientInfo()) {
        valueAssignClientInfoReverse();
        $client = new client();
        $client->userID = $_SESSION['user']->userID;
        $person = new person($_POST['firstName'], $_POST['lastName']);
        $client->setPerson($person);
        $client->setClientInfo($_POST['nid'], $_POST['projectArea']);
        updateClientInfo($client);
        $_SESSION['clientInfoEditMode'] = false;
    }
} 
else 
{
    valueAssignClientInfo();
    $_SESSION['clientInfoEditMode'] = true;
    $_SESSION['clientContactEditMode'] = false;
    $_SESSION['clientOrganizationEditMode'] = false;
}

header('location: ../../../Views/Client/Profile/Page/profile.php');
