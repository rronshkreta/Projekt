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
<style>
    .button{
    background-color: #2B81FF; 
    border: none;
    color: white;
    padding: 12px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 12px;
    }
    .button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.button1{
    background-color: #D0312d; 
    border: none;
    color: white;
    padding: 12px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 12px;
    }
    .button1:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
th, td {
  padding: 8px;
}
table {
  border-collapse: collapse;
  border: 1px solid black;
  text-align: center;
	vertical-align: middle;
}
thead th {
  width: 25%;
}
thead {
  background-color: #2B81FF;
  color: white;
  font-size: 0.875rem;
	text-transform: uppercase;
	letter-spacing: 2%;
}


  </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>
  
  <div class="App">
<div class="header">
   
   <a href="index.php">
   <img src="Logoupdated1.png" alt="Sigma Library">
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

            <div class="bookDash">
            <h2 class="section-title"> <span style="color: #01449f;">Books</span></h2>

    <form action="addBook.php" >
    <button   class="button">Add Book</button></form>
    <br>
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
            <td class="linku"><?php echo $value['link'];?></td>
            <td>
            <button class="button"><a href="Update.php? id=<?php echo  $value['id']?>">Update </a></button>
            <button class="button1"><a href="Delete.php? id=<?php echo $value['id'];?>">Delete</a</button>
            </td>
             </tr>
       <?php }?>
    
  </tbody>
</table>
</div>
<div class="bookDash">
            <h2 class="section-title"> <span style="color: #01449f;">Users</span></h2>

    
<table class="table">
  <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Emri</th>
      <th scope="col">Mbiemri</th>
      <th scope="col">Username</th>
      <th scope="col">Emaili</th>
      <th scope="col">Password</th>
      <th scope="col">Roli</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
     require_once("Book.php");
     $user = new User();
     $all = $user->readData();

   ?>
            <?php foreach($all as $key => $value){?>
            <tr>
            <td><?php echo $value['id'];?></td>
            <td><?php echo $value['name'];?></td>
            <td><?php echo $value['surname'];?></td>
            <td><?php echo $value['username'];?></td>
            <td><?php echo $value['email'];?></td>
            <td><?php echo $value['password'];?></td>
            <td><?php echo $value['role'];?></td>
            <td>
            <button class="button"><a href="UpdateUser.php? id=<?php echo  $value['id']?>">Update </a></button>
            <button class="button1"><a href="DeleteUser.php? id=<?php echo $value['id'];?>">Delete</a</button>
            </td>
             </tr>
       <?php }?>
    
  </tbody>
</table>
</div>
</body>
</html>