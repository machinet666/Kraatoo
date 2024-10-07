<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/client.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/user.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/DataBaseConnection.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/contact.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/person.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/user.php');

function insertClient(client $client, user $user)
{
    $userid = insertUser($user);
    if ($userid != -1) {
        $contactID = insertContact($client->contact);
        $personid = insertPerson($client->firstName, $client->lastName, $client->gender, $contactID, $client->dateOfBirth);

        $organizationname = $client->organizationname;
        $organizationtype = $client->organizationtype;
        $website = $client->website;
        $nid = $client->nid;
        $projectArea = $client->projectArea;

        $conn = getConnection();
        $query = "INSERT INTO client (userid, personid, organizationname, organizationtype, website, nid, preferred_service) VALUES ('$userid', '$personid', '$organizationname', '$organizationtype', '$website', '$nid', '$projectArea')";
        mysqli_query($conn, $query);
        return true;
    } 
    else 
    {
        return false;
    }
}


function retreiveClient($userID)
{
    $conn = getConnection();
    $query = "SELECT * FROM client WHERE userid = '$userID';";
    $status = mysqli_query($conn, $query);
    $client = new client();
    if (mysqli_num_rows($status) == 1) 
    {
        $row = mysqli_fetch_assoc($status);
        $client = new Client($row['organizationname'], $row['organizationtype'], $row['website'],  $row['nid'],  $row['preferred_service']);
        $client->userID = $row['userid'];
        $client->setPerson(retrievePerson($row['personid']));
    }
    return $client;
}

function retrieveAllClient()
{
    $conn = getConnection();
    $query = 'SELECT * FROM client;';
    $status = mysqli_query($conn, $query);
    $numberOfUser = mysqli_num_rows($status);

    $allClientUser = [];
    if ($numberOfUser > 0) 
    {
        for ($i = 0; $i < $numberOfUser; $i++) 
        {
            $row = mysqli_fetch_assoc($status);
            $allClientUser[$i] = new client($row['organizationname'], $row['organizationtype'], $row['website'], $row['nid'], $row['preferred_service']);
            $allClientUser[$i]->userID = $row['userid'];
            $allClientUser[$i]->setPerson(retrievePerson($row['personid']));
        }
    }
    return $allClientUser;
}

function updateClientInfo(client $client)
{
    $conn = getConnection();
    $userId = $client->userID;
    $firstName = $client->firstName;
    $lastName = $client->lastName;
    $nid = $client->nid;
    $projectArea = $client->projectArea;
    $personId = $_SESSION['user']->personID;


    $query1 = "UPDATE person SET firstname = '$firstName', lastname = '$lastName' WHERE personid = '$personId'";
    $query2 = "UPDATE client SET nid = '$nid', preferred_service = '$projectArea' WHERE userid ='$userId'";

    mysqli_query($conn, $query1);
    mysqli_query($conn, $query2);
}

function updateClientOrganizationInfo(client $client)
{
    $conn = getConnection();
    $organizationname = $client->organizationname;
    $organizationtype = $client->organizationtype;
    $website = $client->website;
    $userID = $client->userID;
    $query = "UPDATE `client` SET organizationname = '$organizationname', organizationtype ='$organizationtype', website = '$website' WHERE userid = $userID;";
    mysqli_query($conn, $query);
}


function deleteClient($userID, $personID, $contactID)
{
    deleteUser($userID);
    deleteContact($contactID);
    deletePerson($personID);

    $conn = getConnection();
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 0;");
    $query = "DELETE FROM `client` WHERE userid = $userID;";
    mysqli_query($conn, $query);
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 1;");
}
