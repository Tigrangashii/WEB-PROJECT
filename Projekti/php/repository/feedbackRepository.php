<?php

include_once('../Database/Database.php');

class FeedbackRepository {


    private $connection;

    function __construct(){

        $conn= new DatabaseConnection;
        $this->connection=$conn->startConnection();

    }

    function insertFeedback($name, $email, $subject){
        $conn =$this->connection;


        $sql="INSERT INTO feedback(Name,Email, Subject) VALUES(:name,:email, :subject)";

        $statement = $conn->prepare($sql);

        $statement->execute([
	        ':name' => $name,
	        ':email' => $email,
	        ':subject' => $subject,
        ]);
        echo"<script> alert('Feedback has been inserted! '); </script>";

    }

    function getAllFeedbacks(){
        $conn =$this->connection;

        $sql="SELECT * FROM feedback";

        $statement=$conn->query($sql);
        $feedbacks=$statement->fetchAll();
        return $feedbacks;
    }

    function deleteFeedback($id){
        $conn = $this->connection;

        $sql="DELETE FROM feedback WHERE id=:id";

        $statement=$conn->prepare($sql);

        $statement->execute([
	        ':id' => $id,
        ]);


        echo "<script> alert('Feedback has been deleted!'); </script>";
    }


}



?>