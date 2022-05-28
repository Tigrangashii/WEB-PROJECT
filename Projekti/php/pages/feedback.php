<?php 
session_start();

include_once('../repository/feedbackRepository.php');

    $feedbackRepository = new FeedbackRepository();

    $feedbacks=$feedbackRepository->getAllFeedbacks();
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/host.css" />

</head>
<?php include './header.php'?>

<body>
    <?php include './dashboard-panel.php'?>
    <main>
        <div class="section">

            <table>
                <tr>
                    <th>Name.</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th></th>

                </tr>
                <?php
                    foreach($feedbacks as $feedback){
                        echo "
                            <tr>
                            <td>$feedback[name]</td>
                            <td>$feedback[email]</td>
                            <td>$feedback[subject]</td>
                            <td><a href='./deleteFeedback.php?id=$feedback[id]'>Delete</a></td>
                            </tr>
                            ";
                    }
                ?>

            </table>


        </div>

    </main>
</body>

</html>