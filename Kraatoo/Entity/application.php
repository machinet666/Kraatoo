<?php

class application
{
    public $jobID;
    public $applicantID;
    

    public function __construct($jobID = 0, $applicantID = 0)
    {

        $this->jobID = $jobID;
        $this->applicantID = $applicantID;
    }

}