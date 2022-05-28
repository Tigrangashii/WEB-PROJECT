<?php 
    // session_start();
    $loggedIn = '<a href="./start-hosting.php">Start Hosting</a>';

    if(isset($_SESSION['is_logged_in'])) {
        $loggedIn = '<a href="./host.php">Dashboard</a>';
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hosting</title>
    <link rel="stylesheet" href="./css/shared.css" />
</head>

<body>
    <header class="main-header">
        <div>
            <button class="toggle-button">
                <span class="toggle-button__bar"></span>
                <span class="toggle-button__bar"></span>
                <span class="toggle-button__bar"></span>
            </button>
            <a href="./index.php" class="main-header__brand">
                <h1>Brand</h1>
            </a>
        </div>
        <nav class="main-nav">
            <ul class="main-nav__items">
                <li class="main-nav__item">
                    <a href="./packages.php">Packages</a>
                </li>
                <li class="main-nav__item">
                    <a href="./costumers.php">Customers</a>
                </li>
                <li class="main-nav__item">
                    <a href="./contact-us.php">Contact us</a>
                </li>
                <li class="main-nav__item main-nav__item--cta">
                    <?php echo $loggedIn ?>
                </li>
            </ul>
        </nav>
    </header>
    <nav class="mobile-nav">
        <ul class="mobile-nav__items">
            <li class="mobile-nav__item">
                <a href="./index.php">Brand</a>
            </li>
            <li class="mobile-nav__item">
                <a href="./packages.php">Packages</a>
            </li>
            <li class="mobile-nav__item">
                <a href="./costumers.php">Customers</a>
            </li>
            <li class="mobile-nav__item">
                <a href="./contact-us.php">Contact Us</a>
            </li>
            <li class="mobile-nav__item mobile-nav__item--cta">
                <a href="./start-hosting.php">Start Hosting</a>
            </li>
        </ul>
    </nav>
    <script src="./js/shared.js"></script>
</body>

</html>