<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/personal.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/user.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/contact.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/DataBaseConnection.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/contact.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/person.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/user.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/experience.php');


function insertPersonal(personal $personal, user $user)
{
    $userid = insertUser($user);
    if ($userid != -1) 
    {
        $contactID = insertContact($personal->contact);
        $personid = insertPerson($personal->firstName, $personal->lastName, $personal->gender,  $contactID, $personal->dateOfBirth);

        $bachelorDegree = $personal->bachelorDegree;
        $masterDegree = $personal->masterDegree;
        $specializedField = $personal->specilizedField;
        $preferred_position = $personal->preferred_position; 
        $skillList = $personal->skillList;
        $tin = $personal->tin;
        $aboutYourself = $personal->aboutYourself;      

        $conn = getConnection();
        $query = "INSERT INTO personaluser (userid, personid, bachelordegree, masterdegree, specializedfield, preferred_position, skilllist, tin, aboutyourself) VALUES ('$userid', '$personid', '$bachelorDegree', '$masterDegree', '$specializedField', '$preferred_position', '$skillList', '$tin', '$aboutYourself');";
        mysqli_query($conn, $query);
        return true;
    } 
    else 
    {
        return false;
    }
}

function retrievePersonal($userID)
{
    $conn = getConnection();
    $query = "SELECT * FROM personaluser WHERE userid = '$userID';";
    $status = mysqli_query($conn, $query);
    if (mysqli_num_rows($status) == 1) 
    {
        $row = mysqli_fetch_assoc($status);
        $personal = new personal ($row['bachelordegree'], $row['masterdegree'], $row['specializedfield'], $row['userid'], $row['isfreelancer'], $row['skilllist'], $row['tin'], $row['aboutyourself'], $row['preferred_position'], $row['rating']);
        $personal->setPerson(retrievePerson($row['personid']));
        retrieveExperience($userID);
        return $personal;
    }
}

function retrieveAllPersonal()
{
    $conn = getConnection();
    $query = 'SELECT * FROM personaluser;';
    $status = mysqli_query($conn, $query);
    $numberOfUser = mysqli_num_rows($status);

    $allPersonalUser = [];
    if ($numberOfUser > 0) 
    {
        for ($i = 0; $i < $numberOfUser; $i++) 
        {
            $row = mysqli_fetch_assoc($status);
            $allPersonalUser[$i] = new personal($row['bachelordegree'], $row['masterdegree'], $row['specializedfield'], $row['isfreelancer'], $row['skilllist'], $row['tin'], $row['aboutyourself'], $row['preferred_position']);
            $allPersonalUser[$i]->userID = $row['userid'];
            $allPersonalUser[$i]->setPerson(retrievePerson($row['personid']));
        }
    }
    return $allPersonalUser;
}

function updateAcademic(personal $personal)
{
    $conn = getConnection();
    $userId = $personal->userID;
    $bachelorDegree = $personal->bachelorDegree;
    $masterDegree = $personal->masterDegree;
    $specializedField = $personal->specilizedField;

    $query = "UPDATE personaluser SET bachelordegree ='$bachelorDegree',masterdegree ='$masterDegree',specializedfield = '$specializedField' WHERE userid = '$userId'";
    mysqli_query($conn, $query);
}

function updateOthers (personal $personal)
{
    $conn = getConnection();
    $userId = $personal->userID;
    $skillList = $personal->skillList;
    $tin = $personal->tin;
    $aboutYourself = $personal->aboutYourself;
    $query = "UPDATE personaluser SET skilllist ='$skillList',tin ='$tin', aboutyourself ='$aboutYourself' WHERE userid = '$userId'";
    mysqli_query($conn, $query);
}

function updateFreelancer(personal $personal)
{
    $conn = getConnection();
    $userId = $personal->userID;

    $query = "UPDATE personaluser SET isfreelancer ='1' WHERE userid = '$userId'";
    mysqli_query($conn, $query);


}

function deletePersonal($userID, $personID, $contactID)
{
    deleteUser($userID);
    deleteContact($contactID);
    deletePerson($personID); 
    
    $conn = getConnection();
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 0;");
    $query = "DELETE FROM `personaluser` WHERE userid = $userID;";
    mysqli_query($conn, $query);
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 1;");
}


