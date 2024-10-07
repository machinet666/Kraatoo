<?php
class response
{
    public $publisherID;
    public $requestID;
    public $projectID;
    public $askingPrice;
    public $askingTime;

    public function __construct($publisherID, $requestID, $projectID, $askingPrice = 0, $askingTime = 0)
    {
        $this->publisherID = $publisherID;
        $this->requestID = $requestID;
        $this->projectID = $projectID;
        $this->askingPrice = $askingPrice;
        $this->askingTime = $askingTime;
    }

    public function setAsking($askingPrice, $askingTime)
    {
        $this->askingPrice = $askingPrice;
        $this->askingTime = $askingTime;
    }
}
