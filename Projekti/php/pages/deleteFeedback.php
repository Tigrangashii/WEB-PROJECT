<?php
session_start();
$feedbackId=$_GET['id'];

include_once('../repository/feedbackRepository.php');
$feedbackRepository = new FeedbackRepository();

$feedbackRepository->deleteFeedback($feedbackId);

// $users=$userRepository->getAllUsers();

header('location:feedback.php');



?>