<?php 
session_start();

include_once('../repository/userRepository.php');

    $userRepository = new UserRepository();

    $users=$userRepository->getAllUsers();
    
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
                    <th>Nr.</th>
                    <th>Title</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php
                    foreach($users as $user){
                        echo "
                            <tr>
                            <td>$user[id]</td>
                            <td>$user[title]</td>
                            <td>$user[name]</td>
                            <td>$user[surname]</td>
                            <td>$user[email]</td>
                            <td>$user[password]</td>
                            <td>$user[role]</td>
                            <td><a href='./editUser.php?id=$user[id]'>Edit</a></td>
                            <td><a href='./deleteUser.php?id=$user[id]'>Delete</a></td>
                            </tr>
                            ";
                    }
                ?>

            </table>


        </div>

    </main>
</body>

</html>