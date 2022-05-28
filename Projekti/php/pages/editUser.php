<?php
session_start();

include_once('../repository/userRepository.php');
$userId = $_GET['id'];

$userRepository= new UserRepository;

$user = $userRepository->getUserById($userId);
$role = "";
$selectedRole = "";
if($user['role'] == "USER") {
    $selectedRole = "selected='selected'";
}
$selectedGender = "";
if($user['title'] == "MRS") {
    $selectedGender = "selected='selected'";
} else {
    $selectedGender = "";
}

    if($_SESSION['role'] == 'ADMIN') {
        $role = "
        <label class='label' for='role'>Role</label>
            <select id='role' name='role'>
                <option value='ADMIN'>ADMIN</option>
                <option $selectedRole value='USER'>USER</option>
            </select>";
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/edit.css" />
</head>


<body>
    <form class="form" method="POST">

        <div>
            <label class="label" for="title">Title</label>
            <select id="title" name="gender">
                <option value="mr">Mr.</option>
                <option <?php echo $selectedGender; ?> value="mrs">Mrs.</option>
            </select>

        </div>

        <div>
            <label class="label" for="name">Name</label>
            <input type="text" placeholder="Example" name="name" value="<?php echo $user['name']; ?>">
        </div>
        <div>
            <label for="surname" class="label">Surname</label>
            <input type="text" name="surname" value="<?php echo $user['surname']; ?>">

        </div>
        <div>
            <label class="label" for="email">Email</label>
            <input type="email" name="email" value="<?php echo $user['email']; ?>">

        </div>
        <div>
            <label class="label" for="password">Password</label>
            <input type="password" name="password" value="<?php echo $user['password']; ?>">

        </div>
        <div>
            <?php echo $role ?>

        </div>
        <input type="submit" name="save" value="save">
    </form>
</body>

</html>

<?php

if(isset($_POST['save'])){
$id=$user['id'];
$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$password=$_POST['password'];
$role=$_POST['role'];

$userRepository->updateUser($id,$name,$surname,$email,$gender,$password, $role);
header('location:users.php');
}


?>