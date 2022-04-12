<?php
require("connection.php");
require("User.php");
require("Book.php");
$user=new User();
if(isset($_SESSION["id"])){
  $id = ($_SESSION["id"]);
 
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
    <title>Dashboard</title>
</head>
<body>
<div class="header">
   
   <a href="index.php">
   <img src="images/Logoupdated1.png" alt="Sigma Library">
   </a>
   <ul>
       <li><a href="index.php">Home</li></a>
 <li><a href="Books.php">Books</li></a>
 <li><a href="aboutus.php">About Us</li></a>
       <li><a href="dashboard.php">Dashboard</li></a>
       <li><h4><?php 
            echo $id['username'];
        ?>
        <?php 
            if($id['role'] != 'admin'){ 
                header("Location:index.php");
            }
            ?>
        
           
            
            </h4></li>
       <li><a href ="logOut.php">LogOut</li></a>
   </ul>
</div>
    <form action="addBook.php" >
    <button  name="button">Add Book</button></form>
<table class="table">
  <thead>
    <tr>
    <th scope="col">No.</th>
      <th scope="col">Isbn</th>
      <th scope="col">Foto</th>
      <th scope="col">Emri i Librit</th>
      <th scope="col">Pershkrimi</th>
      <th scope="col">Cmimi</th>
      <th scope="col">Linku</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
     require_once("Book.php");
     $libri = new Book();
     $all = $libri->readData();

   ?>
            <?php foreach($all as $key => $value){?>
            <tr>
            <td><?php echo $value['id'];?></td>
            <td><?php echo $value['isbn'];?></td>
            <td><?php echo $value['photo'];?></td>
            <td><?php echo $value['name'];?></td>
            <td><?php echo $value['description'];?></td>
            <td><?php echo $value['price'];?></td>
            <td><?php echo $value['link'];?></td>
            <td>
            <button ><a href="Update.php? id=<?php echo  $value['id']?>">Update </a></button>
            <button ><a href="Delete.php? id=<?php echo $value['id'];?>">Delete</a</button>
            </td>
             </tr>
       <?php }?>
    
  </tbody>
</table>
    
</body>
</html>