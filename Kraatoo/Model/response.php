<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/response.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/DataBaseConnection.php');

function search($projectID, $requestID)
{
    $conn = getConnection();
    $query = "SELECT * FROM `response` WHERE requestID = $requestID and projectid = $projectID;";
    if (mysqli_num_rows(mysqli_query($conn, $query)) != 1)
        return true;
    else
        return false;
}

function insertResponse($response)
{
    if (search($response->requestID, $response->projectID)) {
        $conn = getConnection();
        $query = "INSERT INTO response VALUES ($response->publisherID, $response->requestID, $response->projectID, '$response->askingPrice', $response->askingTime);";
        mysqli_query($conn, $query);
    }
}

function retrieveResponse($projectID)
{
    $conn = getConnection();
    $query = "SELECT * FROM `response` WHERE projectid = $projectID;";
    $result = mysqli_query($conn, $query);
    $response = [];
    if (mysqli_num_rows($result) > 0) 
        for ($index = 0; $index < mysqli_num_rows($result); $index++) 
        {
            $row = mysqli_fetch_assoc($result);
            $response[$index] = new response($row['publishID'], $row['requestID'], $row['projectid'], $row['askingprice'], $row['askingtime']);
        }
    return $response;
}

function deleteResponse($response)
{
    $conn = getConnection();
    $query = "DELETE FROM response WHERE publishID = $response->publisherID AND requestID = $response->requestID;";
    mysqli_query($conn, $query);
}
