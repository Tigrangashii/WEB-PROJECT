<?php 
session_start();

include_once('../controllers/registerControllers.php');
    include_once('../models/user.php');


$userRepository = new UserRepository;


    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/shared.css" />
    <link rel="stylesheet" href="./css/start-hosting.css" />
</head>

<body>
    <?php include './header.php'?>

    <main class="signup-page">
        <h1 class="signup-title">Awesome! Let's dive right in!</h1>
        <form class="signup-form" method="post">
            <label for="title">Title</label>
            <select id="title" name="gender">
                <option value="mr">Mr.</option>
                <option value="mrs">Mrs.</option>
            </select>
            <label for="first-name">First name</label>
            <input pattern="^[A-Z][A-z]*" type="text" id="first-name" name="name" required />
            <label for="last-name">Last name</label>
            <input pattern="^[A-Z][A-z]*" type="text" id="last-name" name="surname" required />
            <label for="email">E-Mail</label>
            <input pattern="^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$" type="email" id="email"
                name="email" required />
            <label for="password">Password</label>
            <input name="password" pattern="^[A-Z][A-z]*\d{3}$" type="password" id="password" required />
            <div class="signup-form__checkbox">
                <input name='terms' type="checkbox" id="agree-terms" required />
                <label for="agree-terms">Agree to
                    <a href="https://www.termsandcondiitionssample.com/live.php?token=jawVjhCXYdWIZbekIXUBTo7Be5NxVgue">Terms
                        &amp; Conditionss</a>
                </label>
            </div>
            <button type="submit" class="button">Sign Up</button>
            <div class="login">Already have an account? <a href="./login.php">Sign in.</a></div>
        </form>
    </main>
    <?php include './footer.php'?>
</body>

</html>