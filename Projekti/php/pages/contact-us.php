<?php 
session_start();

include_once('../repository/feedbackRepository.php');
$feedbackRepository = new FeedbackRepository();


$emailValue = isset($_SESSION['is_logged_in']) ? $_SESSION['email'] : "";
$nameValue = isset($_SESSION['is_logged_in']) ? $_SESSION['name'] : "";


if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject'])){

        echo"<script> alert('Fill up all fields! ');</script>";

    }else{

        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $feedbackRepository->insertFeedback($name, $email, $subject);
    }
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Contact US</title>
    <link rel="stylesheet" href="./css/shared.css" />
    <link rel="stylesheet" href="./css/contact-us.css" />
</head>

<body>
    <?php include './header.php'?>
    <main>
        <div class="container">
            <form method="POST">
                <label for="name">First Name</label>
                <input type="text" value="<?php echo $nameValue; ?>" id="fname" name="name" placeholder="Your name.." />

                <label for="email">Email <span class="required">*</span></label>
                <input type="email" value="<?php echo $emailValue; ?>" id="email" name="email"
                    placeholder="Your Email Address.." required>

                <label for="subject">Subject <span class="required">*</span></label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height: 200px"
                    required></textarea>

                <button type="submit" class="button">Submit</button>
            </form>
        </div>
    </main>

    <?php include './footer.php'?>

</body>

</html>