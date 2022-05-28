<?php
session_start();
$userId=$_GET['id'];

include_once('../repository/userRepository.php');
$userRepository = new UserRepository();

$userRepository->deleteUser($userId);

// $users=$userRepository->getAllUsers();

header('location:users.php');



?>