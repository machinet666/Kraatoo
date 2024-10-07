<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/contact.php');

class person 
{
    public $personID;
    public $firstName;
    public $lastName;
    public $gender;
    public $dateOfBirth;
    public $contact;

    public function __construct($firstName = "", $lastName = "", $gender = "", $dateOfBirth = "", $contact = new contact(), $personID = 0) 
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->dateOfBirth = $dateOfBirth;
        $this->contact = $contact;
        $this->personID = $personID;
    }

    public function setPerson(person $person) 
    {
        $this->personID = $person->personID;
        $this->firstName = $person->firstName;
        $this->lastName = $person->lastName;
        $this->gender = $person->gender;
        $this->dateOfBirth = $person->dateOfBirth;
        $this->contact = $person->contact;
    }
    
    // public function display ()
    // {
    //     echo $this->personID;
    //     echo $this->firstName;
    //     echo $this->lastName;
    //     echo $this->gender;
    //     echo $this->dateOfBirth;
    //     $this->contact->display();
    // }
}
?>
