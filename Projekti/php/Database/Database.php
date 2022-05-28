<?php

class DatabaseConnection{

    private $server="localhost";
    private $username="root";
    private $password="password";
    private $database="test";

    function startConnection(){
        try{
            //Konekcioni
           $conn = new PDO("mysql:host=$this->server;dbname=$this->database",$this->username,$this->password);
           //PDO error
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           return $conn;
        }catch(PDOException $e){
            //Mesazhi
            echo "Database connection failed!!!". $e->getMessage();

        }
        
    }

}

?>