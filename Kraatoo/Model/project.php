<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/project.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/response.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/DataBaseConnection.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/response.php');

function insertProject(project $project)
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $publisherID = $project->publisherID;
    $title = $project->title;
    $description = $project->description;
    $skillList = $project->skillList;
    $complexity = $project->complexity;
    $experience = $project->experience;
    $offeredPrice = $project->offeredPrice;
    $paymentType = $project->paymentType;
    $timePeriod = $project->timePeriod;
    $status = $project->status;

    $conn = getConnection();
    $query = "INSERT INTO projects (publisherid, title, description, skilllist, complexity, experience, offeredprice, paymenttype, timeperiod) 
    VALUES ('$publisherID', '$title', '$description', '$skillList', '$complexity', '$experience', '$offeredPrice', '$paymentType', '$timePeriod')";
    mysqli_query($conn, $query);
}


function retreiveAllPendingProjectForFreelancer($requestID)
{
    $conn = getConnection();
    $query = "SELECT * FROM projects WHERE status = 'pending'";
    $status = mysqli_query($conn, $query);
    $numberOfUser = mysqli_num_rows($status);
    $allPendingProjectForFreelancer = [];
    if ($numberOfUser > 0) {
        $j = 0;
        for ($i = 0; $i < $numberOfUser; $i++) {
            $row = mysqli_fetch_assoc($status);
            if (search($row['projectid'], $requestID))
            {
                $allPendingProjectForFreelancer[$j] = new project($row['projectid'], $row['publisherid'], $row['title'], $row['description'], $row['skilllist'], $row['complexity'], $row['experience'], $row['offeredprice'], $row['paymenttype'], $row['timeperiod'], $row['publishdate']);
                $j++;
            }
        }
    }
    return $allPendingProjectForFreelancer;
}

function retreiveAllPendingProjectForClient($publisherID)
{
    $conn = getConnection();
    $query = "SELECT * FROM projects WHERE status = 'pending' and publisherid = $publisherID;";
    $status = mysqli_query($conn, $query);
    $numberOfUser = mysqli_num_rows($status);
    $allPendingProjectForClient = [];
    if ($numberOfUser > 0) {
        for ($i = 0; $i < $numberOfUser; $i++) {
            $row = mysqli_fetch_assoc($status);
            $allPendingProjectForClient[$i] = new project($row['projectid'], $row['publisherid'], $row['title'], $row['description'], $row['skilllist'], $row['complexity'], $row['experience'], $row['offeredprice'], $row['paymenttype'], $row['timeperiod'], $row['publishdate']);
        }
    }
    return $allPendingProjectForClient;
}

function startProject($project)
{
    $conn = getConnection();
    $query = "UPDATE projects SET builderid = $project->builderID, status = '$project->status', startdate = '$project->startDate', deadline = '$project->deadline' WHERE projectid = $project->projectID;";
    mysqli_query($conn, $query);
}

function retreiveAllRunningProjectForClient($publisherID)
{
    $conn = getConnection();
    $query = "SELECT * FROM projects WHERE status = 'running'and publisherid = $publisherID;";
    $status = mysqli_query($conn, $query);
    $numberOfUser = mysqli_num_rows($status);
    $allRunningProjectForClient = [];
    if ($numberOfUser > 0) {
        for ($i = 0; $i < $numberOfUser; $i++) {
            $row = mysqli_fetch_assoc($status);
            $allRunningProjectForClient[$i] = new project($row['projectid'], $row['publisherid'], $row['title'], $row['description'], $row['skilllist'], $row['complexity'], $row['experience'], $row['offeredprice'], $row['paymenttype'], $row['timeperiod'], $row['publishdate'], $row['deadline'], $row['builderid']);
        }
    }
    return $allRunningProjectForClient;
}

function retreiveAllPastProjectForClient($publisherID)
{
    $conn = getConnection();
    $query = "SELECT * FROM `projects` WHERE status != 'pending' AND status != 'running' AND publisherid = $publisherID;";
    $status = mysqli_query($conn, $query);
    $numberOfUser = mysqli_num_rows($status);
    $allPastProjectForClient = [];
    if ($numberOfUser > 0) {
        for ($i = 0; $i < $numberOfUser; $i++) {
            $row = mysqli_fetch_assoc($status);
            $allPastProjectForClient[$i] = new project($row['projectid'], $row['publisherid'], $row['title'], $row['description'], $row['skilllist'], $row['complexity'], $row['experience'], $row['offeredprice'], $row['paymenttype'], $row['timeperiod'], $row['publishdate'], $row['deadline'], $row['builderid']);
            $allPastProjectForClient[$i]->status = $row['status'];
        }
    }
    return $allPastProjectForClient;
}

function retreiveAllPastProjectForFreelancer($builderID)
{
    $conn = getConnection();
    $query = "SELECT * FROM `projects` WHERE status != 'pending' AND status != 'running' AND builderid = $builderID;";
    $status = mysqli_query($conn, $query);
    $numberOfUser = mysqli_num_rows($status);
    $allPastProjectForFreelancer = [];
    if ($numberOfUser > 0) {
        for ($i = 0; $i < $numberOfUser; $i++) {
            $row = mysqli_fetch_assoc($status);
            $allPastProjectForFreelancer[$i] = new project($row['projectid'], $row['publisherid'], $row['title'], $row['description'], $row['skilllist'], $row['complexity'], $row['experience'], $row['offeredprice'], $row['paymenttype'], $row['timeperiod'], $row['publishdate'], $row['deadline'], $row['builderid']);
            $allPastProjectForFreelancer[$i]->status = $row['status'];
        }
    }
    return $allPastProjectForFreelancer;
}

function updateStatus ($projectID, $status)
{
    $conn = getConnection();
    $query = "UPDATE projects SET status = '$status' WHERE projectid = $projectID;";
    mysqli_query($conn, $query);
}
