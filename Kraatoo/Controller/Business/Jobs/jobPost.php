<?php
require_once('/opt/lampp/htdocs/Kraatoo/Controller/fillUpValue.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/job.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/job.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function jobPostCheck()
{
    $flag = true;
    foreach ($_POST as $key => $value) 
    {
        if (empty($value) and isset($_SESSION['fillUpErrorJobPost'][$key])) 
        {
            $_SESSION['fillUpErrorJobPost'][$key] = "*Can't update empty field";
            $flag = false;
        }
        $_SESSION['fillUpValueJobPost'][$key] = $value;
        
    }
    return $flag;
}

if (jobPostCheck())
{
    $salary = $_POST['salaryFrom']. " to ".$_POST['salaryTo']. " ".$_POST['currency']." ".$_POST['salarytime'];
    
    $job = new job($_SESSION['user']->userID, $_POST['jobTitle'], $_POST['jobType'], $_POST['jobLocation'], $_POST['aboutUs'], $_POST['overview'], $salary);

    insertJob($job);
    valueAndErrorAssignBusinessJobPost();


}


header('location: ../../../Views/Business/Job/page.php');

