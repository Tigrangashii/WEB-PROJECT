<?php

session_start();
include_once('../repository/hostRepository.php');
$hostRepository = new HostRepository();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['host'])) {

        echo "<script> alert('Fill up all the fiels');</script>";
    } else {

        $hostName = $_POST['host'];
        $hostPlan = $_POST['plan'];
        $userName = $_SESSION['name'];
        $userId = $_SESSION['id'];

        $transformedHostName = preg_replace('/\s+/', '', $hostName);

        // echo $transformedHostName;
        $hostRepository->insertHost($userId, $userName, $transformedHostName, $hostPlan);
    }
}

$hosts = $hostRepository->getHostsByUserId($_SESSION['id']);


if ($_SESSION['role'] === "ADMIN") {
    $hosts = $hostRepository->getAllHosts();
}


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
<?php include './header.php' ?>

<body>
    <?php include './dashboard-panel.php' ?>
    <main>
        <div class="section">
            <form class="form-inputs" method="POST">
                <label for="host">
                    Your Host:
                </label>
                <input name="host" id="domain" type="text" class="domain border">
                <p class="tld">
                    .com
                </p>
                <div class="plan-select">
                    <label for="plan">
                        Your Plan:
                    </label>
                    <select class="border" name="plan" id="plan">
                        <option value="free">Free</option>
                        <option value="recommended">Recommended</option>
                        <option value="Premium">Premium</option>
                    </select>
                    <button name="saveBtn" value="Save" class="button saveBtn">save</button>

                </div>
                <?php
                ?>
            </form>

            <table>
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Host Name</th>
                    <th>Host Plan</th>
                    <th></th>
                </tr>
                <?php
                foreach ($hosts as $host) {
                    echo "
                            <tr>
                            <td>$host[userId]</td>
                            <td>$host[userName]</td>
                            <td>$host[hostName].com</td>
                            <td>$host[hostRole]</td>
                            <td><a href='./deleteHost.php?id=$host[id]'>Delete</a></td>
                            </tr>
                            ";
                }
                ?>


            </table>
        </div>

    </main>
</body>

</html>