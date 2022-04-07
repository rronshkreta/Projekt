<?php 
$_SESSION;
session_start();

if(isset($_SESSION['user_id'])){
    usset($_SESSION['user_id']);
}

header("Location: LogIn.php");
die;