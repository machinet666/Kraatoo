<?php
require_once ('person.php');
// require_once('user.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/user.php');

class client extends person
{
    public $userID;
    public $organizationname;
    public $organizationtype;
    public $website;
    public $nid;
    public $projectArea;


    function __construct($organizationname = '', $organizationtype= '', $website = '',  $nid = '', $projectArea = '')
    {
        $this->organizationname =  $organizationname;
        $this->organizationtype = $organizationtype;
        $this->website = $website;
        $this->nid = $nid;
        $this->projectArea = $projectArea;
    }

    function display ()
    {
        echo  $this->firstName, " " , $this->lastName, " " , $this->organizationname, " ", $this->organizationtype, " ",  $this->contact->email, " " ,$this->contact->phoneNumber, " ", $this->contact->address," ",  $this->website, " " ,$this->projectArea, " " ; 
    }

    function setClientInfo($nid, $projectArea)
    {
        $this->nid = $nid;
        $this->projectArea = $projectArea;
    }
}
