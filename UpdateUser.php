<?php
require("connection.php");
require_once("User.php");
$user = new User();
$idd =$_GET['id'];
$record = $user->readDataById($idd);

if(isset($_POST['edit'])){
    if($idd == $user->getId()){
        $user ->setName($_POST['name']);
        $user ->setSurname($_POST['surname']);
        $user ->setUsername($_POST['username']);
        $user ->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        echo $user->updateData();
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
</head>
<body>
    <div class="container">
        <form action='' method ="POST" >
        <div class="form_group" id="drop-area">
            <lable>Emri</lable>
            <input palceholder="Emri" type="text" name="name" id="name"
             value="<?php echo $record['name'];?>">
            </div>
            <div class="form_group">
            <lable>Mbiemri</lable>
            <input palceholder="Mbiemri" type="text" name="surname" id="surname"
             value="<?php echo $record['surname'];?>">
            </div>
            <div class="form_group">
            <lable>Username</lable>
            <input palceholder="Username" type="text" name="username" id="username"
             value="<?php echo $record['username'];?>">
            </div>
            <div class="form_group">
            <lable>Email</lable>
            <input palceholder="Email" type="email" name="email" id="email"
             value="<?php echo $record['email'];?>">
            </div>
            <div class="form_group">
            <lable>Password</lable>
            <input palceholder="Password" type="password" name="password" id="password"
             value="<?php echo $record['password'];?>">
            </div>
            <input class="submit" type="submit" name="edit" id ="submit" >
        </form>
    </div>
  
</body>
</html>