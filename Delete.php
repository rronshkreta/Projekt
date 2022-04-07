<?php
require_once("Book.php");

$libri = new Book();
if(isset($_GET['id'])){
        $myID = $_GET['id'];
        $libri->deleteData($myID);
}




?>