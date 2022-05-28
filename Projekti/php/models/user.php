<?php

class User{

    private $name;
    private $surname;
    private $email;
    private $gender;
    private $password;
    private $role;

    function __construct($name,$surname,$email,$gender,$password, $role){
        $this->name=$name;
        $this->surname=$surname;
        $this->email=$email;
        $this->gender=$gender;
        $this->password=$password;
        $this->role=$role;

    }

    public function __toString() {
        return "Hello $this->name, $this->surname, $this->email, $this->gender, $this->password, $this->role";
    }

    function getName(){
        return $this->name;
    }
    function getSurname(){
        return $this->surname;
    }
    function getEmail(){
        return $this->email;
    }
    function getGender(){
        return $this->gender;
    }
    function getPassword(){
        return $this->password;
    }
    function getRole(){
        return $this->role;
    }
}

?>