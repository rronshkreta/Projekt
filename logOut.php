<?php 
require("User.php");
$_SESSION =[];
session_unset();
session_destroy();

header("Location: LogIn.php");
die;