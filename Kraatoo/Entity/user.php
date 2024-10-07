<?php
class user
{
    public $userID;
    public $email;
    public $type;
    public $password;

    public function __construct($email = "", $type = "", $password = "")
    {
        $this->email = $email;
        $this->type = $type;
        $this->password = $password;
    }

    public function display ()
    {
        echo $this->userID;
        echo $this->email;
        echo $this->type;
        echo $this->password;
        echo "<br>";
    }
}