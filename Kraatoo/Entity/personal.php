<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/person.php');
class personal extends person
{
    public $userID;
    public $bachelorDegree;
    public $masterDegree;
    public $specilizedField;
    public $isAFreelancer;
    public $skillList;
    public $tin;
    public $aboutYourself;
    public $preferred_position;
    public $rating;

    public function __construct($bachelorDegree = '', $masterDegree = '', $specilizedField = '', $userID = 0, $isAFreelancer = false, $skillList = "N/A", $tin = 111, $aboutYourself = "N/A", $preferred_position = "", $rating = 5)
    {
        parent::__construct();
        $this->bachelorDegree = $bachelorDegree;
        $this->masterDegree = $masterDegree;
        $this->specilizedField = $specilizedField;
        $this->userID = $userID;
        $this->isAFreelancer = $isAFreelancer;
        $this->userID = $userID;
        $this->skillList = $skillList;
        $this->tin = $tin;
        $this->aboutYourself = $aboutYourself;
        $this->preferred_position = $preferred_position;
        $this->rating = $rating;
    }

    public function setOthersInfo($userID, $skillList, $tin, $aboutYourself)
    {
        $this->userID = $userID;
        $this->skillList = $skillList;
        $this->tin = $tin;
        $this->aboutYourself = $aboutYourself;
    }

    // public function display()
    // {
    //     parent :: display();
    //     echo "User ID - " . $this->userID;
    //     echo $this->bachelorDegree;
    //     echo $this->masterDegree;
    //     echo $this->specilizedField;
    //     echo "Freelancer - " . $this->isAFreelancer. "<br>";
    //     echo $this->skillList;
    //     echo $this->tin;
    //     echo $this->aboutYourself;
    //     echo $this->preferred_position;
    //     echo "<br>";

    // }
}
