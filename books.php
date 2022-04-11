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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Library</title>
</head>
<body>
    <div class="root">
        <div class="App">
            <div class="header">
                <a href="index.php">
                <img src="images/Logoupdated1.png" alt="Sigma Library">
                </a>
                <ul>
                    <li><a href="index.php">Home</li></a>
                    <li><a href="Books.php">Books</li></a>
                    <li><a href="aboutus.php">About Us</li></a>
                    <li><a href="dashboard.php">Dashboard</li></a>
                    <li><a href ="logOut.php">LogOut</li></a>
                </ul>
            </div>

            <div id="books-body">
                <main id="books-main">
                    <div class="books-container">
                        <div class="row">
                            <div class="books-header">
                                <h2 class="section-title books-header-title">All Books</h2>
                                </div>
                                <div class="books">
                                    <?php
                                    require_once("Book.php");
                                        $libri = new Book();
                                        $all = $libri->readData();
                                    ?>
                                        <?php foreach($all as $key => $value){ ?>
                                            <div class="book">
            <a href="#">
                <figure class="book-img-wrapper">
                <img  src="<?php echo $value['photo']?>" class="book-img">
                </figure>
            </a>
            <div class = "book-isbn">
            <a class="isbn-title-link" href="#"><?php echo $value['isbn']?></a>
            </div>
            <div class="book-title">
                <a class="book-title-link" href="#"><?php echo $value['name']?></a>
            </div>
            <div class="book-description">
            <p><?php echo $value['description']?></p>
            </div>
            <div class="book-price">
            <h5><?php echo $value['price']?></h5>
            </div>    
        </div><?php }?>
                                   
                        </div>
                    </div>
                </div>
                    </div>
                </main>
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
            </div>
        </div>
    </div>
</body>
</html>
