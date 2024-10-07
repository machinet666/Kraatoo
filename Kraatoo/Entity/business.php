<?php
require_once('contact.php');
class Business
{
    public $userID;
    public $name;
    public $type;
    public $tradelicenseno;
    public $numberofemployees;
    public $websiteurl;
    public $yearofestablishment;
    public $cName;
    public $cEmail;
    public $cNumber;
    public $contact;



    function __construct($name = '', $type = '', $tradelicenseno = 0, $numberofemployees = 0, $yearofestablishment = 0, $websiteurl = '', $cName = '', $cEmail = '', $cNumber = 0, $contact = new contact())
    {
        $this->name = $name;
        $this->type = $type;
        $this->tradelicenseno = $tradelicenseno;
        $this->numberofemployees = $numberofemployees;
        $this->websiteurl = $websiteurl;
        $this->yearofestablishment = $yearofestablishment;
        $this->cName = $cName;
        $this->cEmail = $cEmail;
        $this->cNumber = $cNumber;
        $this->contact = $contact;
    }

    function setContact ($contact , $websiteurl)
    {
        $this->contact = $contact;
        $this->websiteurl = $websiteurl;
        
    }

    function setContactPerson($cName, $cNumber, $cEmail)
    {
        $this->cName = $cName;
        $this->cNumber = $cNumber;
        $this->cEmail = $cEmail;
    }

    function display ()
    {
        echo $this->userID, " name = " , $this->name, " type = " , $this->type, " tradelicenseno = " , $this->tradelicenseno, " numberofemployees = " , $this->numberofemployees, " websiteurl = " , $this->websiteurl, " yearofestablishment = " , $this->yearofestablishment, " " , " cName = " , $this->cName, " cEmail = " , $this->cEmail, " cNumber = " , $this->cNumber;
        $this->contact->display();
        echo "<br>";
    }


}




?>
