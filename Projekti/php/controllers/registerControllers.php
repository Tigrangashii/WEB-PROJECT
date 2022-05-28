<?php
include_once('../models/user.php');
include_once('../repository/userRepository.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) || 
    empty($_POST['password'] || empty($_POST['terms']))){

        echo"<script> alert('Fill up all fields! ');</script>";

    }else{

        $name=$_POST['name'];
        $surname=$_POST['surname'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $password=$_POST['password'];

        $user = new User($name,$surname,$email,$gender,$password, "USER");

        $userRepository= new UserRepository;
        $userRepository->insertUser($user);
        header("location:login.php");
    }
}

?>