<?php

class experience
{
    public $company;
    public $position;
    public $startedFrom;
    public $to;

    public function __construct($company = "", $position = "", $startedFrom = "", $to = "")
    {
        $this->company = $company;
        $this->position = $position;
        $this->startedFrom = $startedFrom;
        $this->to = $to;
    }

    public function display()
    {
        echo $this->company;
        echo $this->position;
        echo $this->startedFrom;
        echo $this->to;
        echo "<br>";
    }
}

?>