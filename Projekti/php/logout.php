<?php 
    session_start();
    $_SESSION['is_logged_in'] = false;
    
    session_destroy();
    header("location:./pages/index.php");
?>