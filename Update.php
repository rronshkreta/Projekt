<?php
require("connection.php");
require_once("Book.php");
$libri = new Book();
$idd =$_GET['id'];
$record = $libri->readDataById($idd);

if(isset($_POST['edit'])){
    if($idd == $libri->getId()){
        $libri ->setPhoto($_POST['photo']);
        $libri ->setIsbn($_POST['isbn']);
        $libri ->setName($_POST['name']);
        $libri ->setDescription($_POST['description']);
        $libri ->setPrice($_POST['price']);
        $libri->setLink($_POST['link']);
        echo $libri->updateData();
        echo "<script>
        alert('dhenat jane PERDITSUAR me sukses');
        document.location='dashboard.php'
        </script>";
        
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<style>
        form{
            display: grid;
            grid-gap: 2rem;
        }
        input{
            background: white;
            color: rgb(7 2 18);
            transition: all 200ms ease;
            border-left: 0 solid transparent;
            border: 0;
            height: 5.8rem;
            padding: 0 calc(5.8rem * 0.5);
            border-radius: calc(5.8rem * 0.3);
            box-shadow: 0 0 2rem rgb(0, 0, 0, 20%);
            margin-left: 25px;
            margin-bottom: 20px;
        }
        form,
        label {
        display: grid;
        grid-gap: 2rem;
        }
        label {
        align-items: center;
        grid-template-columns: auto 1fr;
        }
        .container{
            display: flex;
            justify-content: center;
        }
    </style>
    <div class="container">
        <form action='' method ="POST" >
        <div class="form_group" id="drop-area">
            <lable>Foto e Librit</lable>
            <input type="file" id="fileElem" name="photo" single accept="image/*" onchange="handleFiles(this.files)"
            value ="<?php echo $record['photo'];?> ">
            </div>
            <div class="form_group">
            <lable>Isbn</lable>
            <input type="number" min="0" name="isbn" id="isbn" 
            value ="<?php echo $record['isbn'];?>">
            </div>
            <div class="form_group">
            <lable>Emri i Librit</lable>
            <input palceholder="Emri i Librit" type="text" name="name" id="name"
             value="<?php echo $record['name'];?>">
            </div>
            <div class="form_group">
            <lable>Pershkrimi</lable>
            <input type= "text" name="description" id="description" value="<?php echo $record['description'];?>">
            </div>
            <div class="form_group">
            <lable>Cmimi</lable>
            <input type="number" step="0.01" min="0" name="price" id="price" palceholder ="Cmimi"value="<?php echo $record['price'];?>">
            </div>
            <div class="form_group">
            <lable>Linku</lable>
            <input palceholder="Linku" type="text" name="link" id="link" >
            </div>
            <input class="submit" type="submit" name="edit" id ="submit" >
        </form>
    </div>
  
</body>
</html>