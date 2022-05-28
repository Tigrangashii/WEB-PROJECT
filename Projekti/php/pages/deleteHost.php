<?php
session_start();
$hostId=$_GET['id'];

include_once('../repository/hostRepository.php');
$hostRepository = new HostRepository();

$hostRepository->deleteHost($hostId);

// $users=$userRepository->getAllUsers();

header('location:host.php');



?>