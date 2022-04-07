<?php
session_start();

//include("connection.php");
include("function.php");
//$user_data = check_login($con);



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
                    <li><a href="LogIn.php">LogIn/Register</li></a>
                </ul>
            </div>

            <div id="books-body">
                <main id="books-main">
                    <div class="books-container">
                        <div class="row">
                            <div class="books-header">
                                <h2 class="section-title books-header-title">All Books</h2>
                                <select id="filter">
                                    <option value="DEFAULT" disabled selected>Sort</option>
                                    <option value="LOW-TO-HIGH">Price, Low to High</option>
                                    <option value="HIGH-TO=LOW">Price, High to Low</option>
                                </select>
                                </div>
                                <div class="books">
                                    <?php
                                    //include("Book.php");
                                    //$sql = "select * from book";
                                   // $result = mysqli_query($con,$sql);
                                    //if(mysqli_num_rows($result)>0){
                                      //  return $result;
                                     //}
                                     //$row= mysqli_fetch_assoc($result);
                                     //if($result){ 
                                     //while($row= mysqli_fetch_assoc($result)){
                                      //  $image_name = $row['photo'];
                                            //$isbn = $row['isbn'];
                                           // $name =$row['name'];
                                           // $description = $row['description'];
                                           // $price = $row['price'];
                                       // echo '<div class="book">
                                        //<a href="#">
                                           // <figure class="book-img-wrapper">
                                            //<input type="image" src="'.$photo.'" style="float:right" width="48" height="48">
                                            //</figure>
                                       // </a>
                                       // <div class = "book-isbn">
                                       // <a class="isbn-title-link" href="#">'.$isbn.'</a>
                                       // </div>
                                       // <div class="book-title">
                                       //     <a class="book-title-link" href="#">'.$name.'</a>
                                        //</div>
                                       // <div class="book-description">
                                       // <p>'.$description.'</p>
                                       // </div>
                                       // <div class="book-price">
                                       //     '.$price.'
                                       // </div>    
                                   // </div>';
                                    //}
                               // }
                                    require_once("Book.php");
                                        $libri = new Book();
                                        $all = $libri->readData();
                                    ?>
                                    <div class="book">
                                        <?php foreach($all as $key => $value){ ?>
            <a href="#">
                <figure class="book-img-wrapper">
                <input type="image" src="<?php echo $value['photo']?>" style="float:right" width="48" height="48">
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
