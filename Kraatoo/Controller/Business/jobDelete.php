<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/job.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/job.php');

if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}

if (isset($_GET['index']))
{
    deleteJob($_SESSION['allJobsCircularBusiness'][$_GET['index']]->jobID);
    
}

else
{
    echo 'not working';
}

header("location: redirect.php?option=applicants");

?>