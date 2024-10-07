<?php
class contact
{
    public $id;
    public $email;
    public $phoneNumber;
    public $address;

    public function __construct($email = "", $phoneNumber = "", $address = "", $id = 0)
    {
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
        $this->id = $id;
    }

    // public function setContact(contact $contact) 
    // {
    //     $this->id = $contact->id;
    //     $this->email = $contact->email;
    //     $this->phoneNumber = $contact->phoneNumber;
    //     $this->address = $contact->address;
    // }
 
    public function display ()
    {
        echo $this->id;
        echo $this->email;
        echo $this->phoneNumber;
        echo $this->address;
    }
}
?>