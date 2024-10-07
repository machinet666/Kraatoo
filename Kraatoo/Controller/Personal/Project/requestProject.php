<?php
require_once('/opt/lampp/htdocs/Kraatoo/Model/response.php');
if (isset($_GET['response'])) 
{
    $response = unserialize($_GET['response']);
    $response->setAsking($_GET['askingPrice'], $_GET['askingTime']);
    print_r($response);

    insertResponse($response);
    $index = $_GET['index'];
    header("location: retrivePublisher.php?index=$index&disable=disabled");
}