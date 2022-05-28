<?php 

    $user = '';
    $feedback = '';
    
    if(isset($_SESSION['role']) && $_SESSION['role'] == 'ADMIN') {
        $user = '<li class="item" name="host">
        <a href="./users.php">Users</a>
    </li>';
    $feedback = '<li class="item" name="feedback">
        <a href="./feedback.php">Feedback</a>
    </li>';
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/dashboard.css" />
    <link rel="stylesheet" href="./css/shared.css" />
</head>

<body>
    <main>
        <nav class="sidebar" method="POST">
            <ul class="items">
                <div>
                    <li class="logo">
                        <img alt="" src="./images/download.jpeg" />
                    </li>
                    <li class="item" name="host">
                        <a href="./host.php">Domains</a>
                    </li>
                    <?= $user ?>
                    <?= $feedback ?>
                </div>
                <div>
                    <li id="logout" class="item">
                        <a href="../logout.php">Log Out</a>
                    </li>
                </div>

            </ul>
        </nav>
    </main>

</body>

</html>