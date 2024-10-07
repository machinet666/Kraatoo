<?php

class job 
{
    public $jobID;
    public $userID;
    public $title;
    public $type;
    public $location;
    public $aboutCompany;
    public $overview;
    public $salaryRange;
    public $publishDate;

    public function __construct($userID = 0, $title = '', $type = '', $location = '', $aboutCompany = '', $overview = '', $salaryRange = '', $publishDate= '', $jobID = 0)
    {
        $this->userID = $userID;
        $this->title = $title;
        $this->type = $type;
        $this->location = $location;
        $this->aboutCompany = $aboutCompany;
        $this->overview = $overview;
        $this->salaryRange = $salaryRange;
        $this->publishDate = $publishDate;
        $this->jobID = $jobID;
    }

    public function display()
    {
        echo $this->jobID, " ";
        echo $this->userID, " ";
        echo $this->title, " ";
        echo $this->type, " ";
        echo $this->location, " ";
        echo $this->aboutCompany, " ";
        echo $this->overview, " ";
        echo $this->salaryRange, " ";
        echo "<br>";

    }



}