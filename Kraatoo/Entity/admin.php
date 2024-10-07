<?php
require_once('contact.php');
class admin
{
    public $userId;
    public $firstName;
    public $lastName;
    public $contact;
    public function __construct ($firstName = 'hello', $lastName ='world', $contact = new contact())
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->contact = $contact;
    }

    public function display ()
    {
        echo $this->userId;
        echo $this->firstName;
        echo $this->lastName;
        echo $this->contact->display();
    }
}