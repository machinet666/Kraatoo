<?php

class project 
{
    public $projectID;
    public $publisherID;
    public $builderID;
    public $title;
    public $description;
    public $skillList;
    public $complexity;
    public $experience;
    public $offeredPrice;
    public $paymentType;
    public $timePeriod;
    public $status;
    public $startDate;
    public $publishDate;
    public $deadline;

    public function __construct($projectID = 0, $publisherID = 0, $title = '', $description = '', $skillList = '', $complexity = '', $experience = '', $offeredPrice = 0.0, $paymentType = '', $timePeriod = 0, $publishDate = '', $deadline = '', $builderID = 0)
    {
        $this->projectID = $projectID;
        $this->publisherID = $publisherID;
        $this->title = $title;
        $this->description = $description;
        $this->skillList = $skillList;
        $this->complexity = $complexity;
        $this->experience = $experience;
        $this->offeredPrice = $offeredPrice;
        $this->paymentType = $paymentType;
        $this->timePeriod = $timePeriod;
        $this->publishDate = $publishDate;
        $this->deadline = $deadline;
        $this->builderID = $builderID;
    }
}

?>