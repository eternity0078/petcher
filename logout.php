<?php 
    require 'includes/connection.php';
    unset($_SESSION['logged_user']);
    header('Location: /max/login.php');
?>
