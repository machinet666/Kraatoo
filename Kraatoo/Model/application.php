<?php
require_once('/opt/lampp/htdocs/Kraatoo/Model/DataBaseConnection.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/application.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/Personal.php');
// require_once('/opt/lampp/htdocs/Kraatoo/Entity/personal.php');


function insertApplication (application $application)
{
    $jobID =$application->jobID;
    $userID = $application->applicantID;

    $conn = getConnection();
    $query = "INSERT INTO applications (userid, jobid) VALUES ('$userID', '$jobID')";
    mysqli_query($conn, $query);
}

function retrieveApplication ($userID)
{
    $conn = getConnection();
    $query = "SELECT jobid FROM applications WHERE userid = '$userID';";
    $status = mysqli_query($conn, $query);
    $numberOfRow = mysqli_num_rows($status);
    $application = [];
    for ($i = 0; $i < $numberOfRow; $i++)
    {
        $row = mysqli_fetch_assoc($status);
        $application[$i] = $row['jobid'];
    }

    // print_r($application);

    return $application;
    
}

function retrieveApplicantsBusiness($jobID)
{

    $conn = getConnection();
    $query = "SELECT userid FROM applications WHERE jobid = '$jobID';";
    $status = mysqli_query($conn, $query);
    $numberOfRow = mysqli_num_rows($status);
    $applicants = [];

    while ($row = mysqli_fetch_assoc($status)) 
    {
        $applicants[] = retrievePersonal($row['userid']);
    }

    return $applicants;
}