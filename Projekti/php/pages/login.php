<?php
session_start();

include_once('../repository/userRepository.php');
$userRepository = new UserRepository();
$users = $userRepository->getAllUsers();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($users as $user) {

        if($_POST['email'] == $user['email'] && $_POST['password'] == $user['password']) {

            $_SESSION['is_logged_in'] = true;
            $_SESSION['role'] =  $user['role'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['id'] = $user['id'];
            header("location:index.php");
        } else {
            $error = 'Email or Password is incorrect';
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <link rel="stylesheet" href="./css/shared.css" />
    <link rel="stylesheet" href="./css//login.css" />
</head>

<body>
    <?php include './header.php' ?>
    <main class="login-page">
        <h1 class="login-title">Please enter your Login information!</h1>
        <form class="login-form" method="post">
            <label for="email">E-Mail</label>
            <input type="email" id="email" name="email" required />
            <label id="email-error" class="email-error">Error on Email!</label>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required />
            <label id="password-error" class="password-error">Error on Password!</label>
            <button name="loginBtn" value="Login" onclick="validate()" class="button">Login</button>
        </form>
    </main>
    <?php include './footer.php' ?>

    <script src="./js/login.js"></script>
</body>

</html>