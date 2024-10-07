<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/job.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/DataBaseConnection.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/business.php');

function insertJob(job $job)
{
    if (session_status() == PHP_SESSION_NONE) 
    {
        session_start();
    }

    $userID = $job->userID;
    $title = $job->title;
    $type = $job->type;
    $location = $job->location;
    $aboutCompany = $job->aboutCompany;
    $overview = $job->overview; 
    $salaryRange = $job->salaryRange;

    $conn = getConnection();
    $query = "INSERT INTO jobs (publisherID, title, type, location, aboutcompany, overview, salaryrange) 
    VALUES ('$userID', '$title', '$type', '$location', '$aboutCompany', '$overview', '$salaryRange')";
    mysqli_query($conn, $query);

}

function retrieveAllJob($application)
{
    // print_r($application);
    $conn = getConnection();
    $query = "SELECT * FROM jobs";
    $status = mysqli_query($conn, $query);
    $numberOfUser = mysqli_num_rows($status);
    
    $allJobsCircular = 
    [
        'Applied' => [],
        'Browse' => [],
    ];

    if ($numberOfUser > 0) 
    {
        $j = 0;
        $k = 0;
        for ($i = 0; $i < $numberOfUser; $i++) 
        {
            $row = mysqli_fetch_assoc($status);
            if (in_array($row['jobid'], $application))
            {
                $allJobsCircular['Applied'][$j] = new job($row['publisherID'], $row['title'],$row['type'],$row['location'],$row['aboutcompany'],$row['overview'],$row['salaryrange'], $row['publishdate'], $row['jobid']);
                $j += 1;
            }
            else
            {
                $allJobsCircular['Browse'][$k] = new job($row['publisherID'], $row['title'],$row['type'],$row['location'],$row['aboutcompany'],$row['overview'],$row['salaryrange'], $row['publishdate'], $row['jobid']);
                $k += 1;
            }
        }
    }
    return $allJobsCircular;
}


function retrieveJobBusiness()
{
    $publisherID = $_SESSION['user']->userID;
    $conn = getConnection();
    $query = "SELECT * FROM jobs WHERE publisherID = '$publisherID'";
    $status = mysqli_query($conn, $query);
    $numberOfUser = mysqli_num_rows($status);
    $allJobsCircular = [];

    if ($numberOfUser > 0)
    {
        for ($i = 0; $i < $numberOfUser; $i++) 
        {
            $row = mysqli_fetch_assoc($status);
            $allJobsCircular[$i] = new job($row['publisherID'],$row['title'], $row['type'], $row['location'], $row['aboutcompany'], $row['overview'],$row['salaryrange'], $row['publishdate'], $row['jobid']);
        }
    }
    return $allJobsCircular;
}

function deleteJob($jobID)
{
    $conn = getConnection();
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 0;");
    $query1 = "DELETE FROM jobs WHERE jobid = $jobID";
    mysqli_query($conn, $query1);
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 0;");
    $query2 = "DELETE FROM applications WHERE jobid = $jobID";
    mysqli_query($conn, $query2);
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 1;");
}

?>