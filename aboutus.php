<?php

require("connection.php");
require("User.php");
require("Book.php");
$user=new User();
if(isset($_SESSION["id"])){
    $id = $user->setId($_SESSION["id"]);
}
else{
    header("Location:LogIn.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Library</title>
    </head>
    <body>
    <div class="App">
        <div class="header">
            <a href="index.php">
            <img src="images/Logoupdated1.png" alt="Sigma Library">
            </a>
            <ul>
                <li><a href="index.php">Home</li></a>
                <li><a href="Books.php">Books</li></a>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="dashboard.php">Dashboard</li></a>
                <li><a href ="logOut.php">LogOut</li></a>
            </ul>
        </div>
        
        <section class="about-us">
            <div class="about-us-main">
                <img src="images/about_us-2.png" alt="">
                <div class="about-us-text">
                    <h1>About Us</h1>
                    <p>Since its fuse in 2005, Library has cut a specialty 
                        for itself in the youngsters' books section of the 
                        distributing business. We have some expertise in
                        books implied for offspring of various ages.
                        The wide scope of books offered by us incorporates fantasies,
                        moral stories, showed story books, reference books, 
                        general learning books, sentence structure books, 
                        shading books, action books, 
                        sticker books and some more.Our point is to give 
                        significant, charming and also animating substance
                        to youngsters that goes much past their normal 
                        course books.With this point in view, we treat 
                        each book as a work of adoration. Every one of our
                        books are broadly examined, attentively composed
                        and delightfully planned.
                    </p>
                    <br>
                    <h5>Prishtina,10000</h5>
                </div>
            </div>
        </section>
        <footer>
            <div class="container-5">
                <div class="row row-column">
                    <a href="#">
                        <figure class="footer-logo">
                            <img src="images/Logoupdated1.png" class="footer-logo-img" alt>
                        </figure>
                    </a>
                    <div class="footer-copyright">Copyright &copy 2021 Library</div>
                </div>
            </div>
        </footer>

    </body>



</html>