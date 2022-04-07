<?php
require_once("connection.php");
include("function.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
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
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
     require_once("Book.php");
     $libri = new Book();
     $all = $libri->readData();

    //$sql = "select * from book";
    //$result = mysqli_query($con,$sql);
    //if($result){
        //while($row= mysqli_fetch_assoc($result)){
           // $id = $row['id'];
           // $photo = $row['photo'];
           // $isbn = $row['isbn'];
           // $name =$row['name'];
           // $description = $row['description'];
           // $price = $row['price'];
            //?>
            <?php foreach($all as $key => $value){?>
            <tr>
            <td><?php echo $value['id'];?></td>
            <td><?php echo $value['isbn'];?></td>
            <td><?php echo $value['photo'];?></td>
            <td><?php echo $value['name'];?></td>
            <td><?php echo $value['description'];?></td>
            <td><?php echo $value['price'];?></td>
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