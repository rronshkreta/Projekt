<?php

require_once("connection.php");
require("User.php");

if(isset($_SESSION["id"])){
    header("Location:index.php");
}
if(isset($_POST['button'])){
    if(!empty($_POST['email']) && !empty($_POST['password'])){ 
    $user = new User();
    $user->LogIn($_POST['email'],$_POST['password']);
    $_SESSION["id"]=$user->getIDd($_POST['email']);
    $_SESSION["username"]=$user->setUsername($_POST['email']);
    

    }
} 
else{
    echo 'Emaili ose passwordi jane gabim.';
}
?>


<!DOCTYPE html>
<html style="display: flex;
flex-direction: column;
align-items: center;">
    <head>
        <link rel="stylesheet" href="style.css">

    </head>
    <style>
        .formulari{
            display: flex;
            flex-direction: column;
            width: 250px;
        }
        form{
            display: flex;
            justify-content: center;
            width: 500px;
            height: 450px;
        }
        
        .logIn{
            border-radius: 25px;
            border: 2px solid #2b81ff;
            width: 800px;
            height: 600px;
            margin: 100px;
            display: flex;
        }
        .imgA{
            width: 500px;
            border-radius: 25px;
        }
        #email{
        border-radius: 25px;
        border: 2px solid #2b81ff;
        padding: 20px; 
        width: 200px;
        height: 15px;  
        }
        #password{
        border-radius: 25px;
        border: 2px solid #2b81ff;
        padding: 20px; 
        width: 200px;
        height: 15px;
        }
        #logInButton{
        border-radius: 25px;
        border: 2px solid #2b81ff;
        background-color: #2b81ff;
        color: white;
        padding: 20px; 
        width: 200px;
        height: 15px;
        }
        .imgL{
        width: 100px;
        display: flex;
        align-self: center;
        margin-top: 85px;
        margin-bottom: 20px;
        margin-right: 50px;
        
        }
        .right-side{
        display: flex;
        justify-content: center;
        flex-direction: column;
        }
        .imgL img{
            max-width: 100%;
        }
        h2{
            align-self: baseline;
            color:#2b81ff;
        }


        
    </style>
    <body>
        <div class="logIn">
        <img src="download.jpg" alt="bookshelf" class="imgA">
        <div class="right-side">
         
           <img src="Logoupdated1.png" alt="logo" class="imgL">
           
        <form  method="POST" action="LogIn.php" name="login">
            
                <div class = "formulari">
                    <h2>LogIn</h2><br>
                Email:<br><input type="email" name="email" id="email" required>
                <br>
                Password:<br><input type = "password" name="password" id = "password" required> 
                <br>
                <input type="submit" name="button" id = "logInButton" action="LogIn.php">
                <br>
                <a href="SignUp.php"><p style="color:#2b81ff;">I do not have an account/SignUp</p></a>
            </div> </form></div>
        </div>
    </body>


</html>