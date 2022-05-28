<?php

include_once('../Database/Database.php');

class UserRepository{


    private $connection;

    function __construct(){

        $conn= new DatabaseConnection;
        $this->connection=$conn->startConnection();

    }

    function insertUser($user){
        $conn =$this->connection;

        $name=$user->getName();
        $surname=$user->getSurname();
        $email=$user->getEmail();
        $gender=$user->getGender();
        $password=$user->getPassword();
        $role = $user->getRole();

        $sql="INSERT INTO users(Name,Surname,Email,Title,Password, Role) VALUES(:name,:surname,:email,:gender,:password, :role)";

        $statement = $conn->prepare($sql);

        $statement->execute([
	        ':name' => $name,
	        ':surname' => $surname,
	        ':email' => $email,
	        ':gender' => $gender,
	        ':password' => $password,
	        ':role' => $role,
        ]);

        echo"<script> alert('User has been inserted! '); </script>";
    }

    function getAllUsers(){
        $conn =$this->connection;

        $sql="SELECT * FROM users";

        $statement=$conn->query($sql);
        $users=$statement->fetchAll();
        return $users;
    }

    function getUserById($id){

        $conn=$this->connection;

        $sql="SELECT * FROM users WHERE id='$id' ";

        $statement=$conn->query($sql);
        $user=$statement->fetch();
        return $user;
    }

    function updateUser($id, $name,$surname,$email,$gender,$password, $role){

        $conn =$this->connection;

        $sql="UPDATE users SET title=:title, name=:name, surname=:surname, email=:email, password=:password, role=:role where id=:id";

        $statement=$conn->prepare($sql);

        $statement->execute([
	        ':title' => $gender,
	        ':name' => $name,
	        ':surname' => $surname,
	        ':email' => $email,
	        ':password' => $password,
	        ':role' => $role,
	        ':id' => $id,
        ]);

        echo "<script> alert('User has been updated!')</script>";

    }

    function deleteUser($id){
        $conn = $this->connection;

        $sql="DELETE FROM users WHERE id=:id";

        $statement=$conn->prepare($sql);

        $statement->execute([
	        ':id' => $id,
        ]);


        echo "<script> alert('User has been deleted!'); </script>";
    }

}



?>