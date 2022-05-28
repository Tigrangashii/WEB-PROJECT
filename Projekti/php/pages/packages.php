<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Packages</title>
    <link rel="stylesheet" href="./css/packages.css" />
    <link rel="stylesheet" href="./css/shared.css" />
</head>

<body>
    <div class="background"></div>
    <?php include './modal.php' ?>
    <?php include './header.php' ?>

    <main>

        <section class="package" id="plus">
            <a onclick="onChoosePlan()">
                <h1 class="package__title">Our PLUS Plan</h1>
                <h2 class="package__badge">RECOMMENDED</h2>
                <h2 class="package__subtitle">
                    The most popular choice of our customers.
                </h2>
                <p class="package__info">
                    Benefit from increased storage and faster support to ensure that
                    your mission-critical data and applications are always available!
                </p>
            </a>
        </section>

        <section class="package" id="free">
            <a onclick="onChoosePlan()">
                <h1 class="package__title">Our FREE Plan</h1>
                <h2 class="package__subtitle">
                    An extremely solid start into our hosting world.
                </h2>
                <p class="package__info">Get started immediately at zero cost!</p>
            </a>
        </section>
        <div class="clearfix"></div>
        <section class="package" id="premium">
            <a onclick="onChoosePlan()">
                <h1 class="package__title">Our PREMIUM Plan</h1>
                <h2 class="package__subtitle">
                    All your enterprise needs. Instant support, guaranteed uptime.
                </h2>
                <p class="package__info">
                    The best solution for small to large enterprises. Because hosting
                    shouldn't be in the way!
                </p>
            </a>
        </section>
    </main>

    <?php include './footer.php' ?>

    <script src="./js/shared.js"></script>
</body>

</html>