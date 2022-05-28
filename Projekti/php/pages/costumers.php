<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Customers</title>
    <link rel="stylesheet" href="./css/customers.css" />
    <link rel="stylesheet" href="./css/shared.css" />
</head>

<body>
    <?php include './header.php'?>
    <main>
        <div>
            <div class="testimonial" id="customer-1">
                <div class="testimonial__image-container">
                    <img src="./images/download.jpeg" alt="Mike Statham - Customer" class="testimonial__image" />
                </div>
                <div class="testimonial__info">
                    <h1 class="testimonial__name">Filan</h1>
                    <p class="testimonial__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                        bibendum enim sit amet ex commodo pharetra. Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Aenean bibendum pharetra arcu,
                        non condimentum libero. Donec arcu leo, posuere quis nisi at,
                        eleifend sagittis purus.
                    </p>
                </div>
            </div>
            <div class="testimonial" id="customer-2">
                <div class="testimonial__info">
                    <h1 class="testimonial__name">Fisteku</h1>
                    <p class="testimonial__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                        bibendum enim sit amet ex commodo pharetra. Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Aenean bibendum pharetra arcu,
                        non condimentum libero. Donec arcu leo, posuere quis nisi at,
                        eleifend sagittis purus.
                    </p>
                </div>
                <div class="testimonial__image-container">
                    <img src="./images/download.jpeg" alt="John Mellow - Customer" class="testimonial__image" />
                </div>
            </div>
        </div>
    </main>
    <?php include './footer.php'?>

</body>

</html>