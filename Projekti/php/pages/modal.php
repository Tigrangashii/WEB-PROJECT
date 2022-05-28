<?php 
//  include './header.php';

$redirect = './start-hosting.php';
if(isset($_SESSION['is_logged_in'])) {
$redirect = './host.php';
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
    <div class="backdrop"></div>
    <div class="modal">
        <h1 class="modal__title">Do you want to continue?</h1>
        <div class="modal__actions">
            <a href='<?php echo $redirect ?>' class="modal__action">Yes!</a>
            <button class="modal__action modal__action--negative" type="button">
                No!

            </button>
        </div>
    </div>
    <script src="./js/shared.js"></script>
</body>

</html>