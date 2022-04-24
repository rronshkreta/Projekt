<?php
require("connection.php");
require_once("User.php");

$user = new User();
if(isset($_GET['id'])){
        $myID = $_GET['id'];
        $user->deleteData($myID);
}




?>