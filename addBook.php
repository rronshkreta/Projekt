<?php

require_once("Book.php");
if(isset($_POST['submit'])){
    $libri = new Book();
    $libri->setPhoto($_POST['fileElem']);
    $libri ->setIsbn($_POST['isbn']);
    $libri ->setName($_POST['name']);
    $libri->setDescription($_POST['description']);
    $libri ->setPrice($_POST['price']);
    $libri->setLink($_POST['link']);
    $libri ->insertData();    
}
?>
<style>
    #display_image{
   width: 300px;
   height: 169px;
   border: 1px solid black;
   background-position: center;
   background-size: cover;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<body>
    <div class="container">
        <form method ="post"action="">
        <div class="form_group">
        <div class="form_group" id="drop-area">
            <lable>Foto e Librit</lable>
            <input type="file" id="fileElem" name="fileElem" accept="image/*" onchange="handleFiles(this.files)">
            <div class="form_group">
            <lable>Isbn</lable>
            <input palceholder="Emri i Librit" type="number" min="0" name="isbn" id="isbn" >
            </div>
            <div class="form_group">
            <lable>Emri i Librit</lable>
            <input palceholder="Emri i Librit" type="text" name="name" id="name" >
            </div>
            <div class="form_group">
            <lable>Pershkrimi</lable>
            <input type= "text" name="description" id="description" >
            </div>
            <div class="form_group">
            <lable>Cmimi</lable>
            <input type="number" step="0.01" min="0" name="price" id="price" palceholder ="Cmimi">
            </div>
            <div class="form_group">
            <lable>Linku</lable>
            <input palceholder="Link" type="text" name="link" id="link" >
            </div>
            <input class="submit" type="submit" name="submit" id ="submit" >
            <a href="dashboard.php">cancel</a>
        </form>
    </div>
    <script>
        
        let dropArea = document.getElementById('drop-area');

        dropArea.addEventListener('dragenter', handlerFunction, false)
        dropArea.addEventListener('dragleave', handlerFunction, false)
        dropArea.addEventListener('dragover', handlerFunction, false)
        dropArea.addEventListener('drop', handlerFunction, false)

        
    </script>
</body>
</html>