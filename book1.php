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
$libri = new Book();
$idd =$_GET['id'];
$record = $libri->readDataById($idd);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        svg:not(:root).svg-inline--fa {
            overflow: visible;
        }

        .svg-inline--fa {
            display: inline-block;
            font-size: inherit;
            height: 1em;
            overflow: visible;
            vertical-align: -0.125em;
        }

        .svg-inline--fa.fa-lg {
            vertical-align: -0.225em;
        }

        .svg-inline--fa.fa-w-1 {
            width: 0.0625em;
        }

        .svg-inline--fa.fa-w-2 {
            width: 0.125em;
        }

        .svg-inline--fa.fa-w-3 {
            width: 0.1875em;
        }

        .svg-inline--fa.fa-w-4 {
            width: 0.25em;
        }

        .svg-inline--fa.fa-w-5 {
            width: 0.3125em;
        }

        .svg-inline--fa.fa-w-6 {
            width: 0.375em;
        }

        .svg-inline--fa.fa-w-7 {
            width: 0.4375em;
        }

        .svg-inline--fa.fa-w-8 {
            width: 0.5em;
        }

        .svg-inline--fa.fa-w-9 {
            width: 0.5625em;
        }

        .svg-inline--fa.fa-w-10 {
            width: 0.625em;
        }

        .svg-inline--fa.fa-w-11 {
            width: 0.6875em;
        }

        .svg-inline--fa.fa-w-12 {
            width: 0.75em;
        }

        .svg-inline--fa.fa-w-13 {
            width: 0.8125em;
        }

        .svg-inline--fa.fa-w-14 {
            width: 0.875em;
        }

        .svg-inline--fa.fa-w-15 {
            width: 0.9375em;
        }

        .svg-inline--fa.fa-w-16 {
            width: 1em;
        }

        .svg-inline--fa.fa-w-17 {
            width: 1.0625em;
        }

        .svg-inline--fa.fa-w-18 {
            width: 1.125em;
        }

        .svg-inline--fa.fa-w-19 {
            width: 1.1875em;
        }

        .svg-inline--fa.fa-w-20 {
            width: 1.25em;
        }

        .svg-inline--fa.fa-pull-left {
            margin-right: 0.3em;
            width: auto;
        }

        .svg-inline--fa.fa-pull-right {
            margin-left: 0.3em;
            width: auto;
        }

        .svg-inline--fa.fa-border {
            height: 1.5em;
        }

        .svg-inline--fa.fa-li {
            width: 2em;
        }

        .svg-inline--fa.fa-fw {
            width: 1.25em;
        }

        .fa-layers svg.svg-inline--fa {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
        }

        .fa-layers {
            display: inline-block;
            height: 1em;
            position: relative;
            text-align: center;
            vertical-align: -0.125em;
            width: 1em;
        }

        .fa-layers svg.svg-inline--fa {
            -webkit-transform-origin: center center;
            transform-origin: center center;
        }

        .fa-layers-counter,
        .fa-layers-text {
            display: inline-block;
            position: absolute;
            text-align: center;
        }

        .fa-layers-text {
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transform-origin: center center;
            transform-origin: center center;
        }

        .fa-layers-counter {
            background-color: #ff253a;
            border-radius: 1em;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            color: #fff;
            height: 1.5em;
            line-height: 1;
            max-width: 5em;
            min-width: 1.5em;
            overflow: hidden;
            padding: 0.25em;
            right: 0;
            text-overflow: ellipsis;
            top: 0;
            -webkit-transform: scale(0.25);
            transform: scale(0.25);
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .fa-layers-bottom-right {
            bottom: 0;
            right: 0;
            top: auto;
            -webkit-transform: scale(0.25);
            transform: scale(0.25);
            -webkit-transform-origin: bottom right;
            transform-origin: bottom right;
        }

        .fa-layers-bottom-left {
            bottom: 0;
            left: 0;
            right: auto;
            top: auto;
            -webkit-transform: scale(0.25);
            transform: scale(0.25);
            -webkit-transform-origin: bottom left;
            transform-origin: bottom left;
        }

        .fa-layers-top-right {
            right: 0;
            top: 0;
            -webkit-transform: scale(0.25);
            transform: scale(0.25);
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .fa-layers-top-left {
            left: 0;
            right: auto;
            top: 0;
            -webkit-transform: scale(0.25);
            transform: scale(0.25);
            -webkit-transform-origin: top left;
            transform-origin: top left;
        }

        .fa-lg {
            font-size: 1.3333333333em;
            line-height: 0.75em;
            vertical-align: -0.0667em;
        }

        .fa-xs {
            font-size: 0.75em;
        }

        .fa-sm {
            font-size: 0.875em;
        }

        .fa-1x {
            font-size: 1em;
        }

        .fa-2x {
            font-size: 2em;
        }

        .fa-3x {
            font-size: 3em;
        }

        .fa-4x {
            font-size: 4em;
        }

        .fa-5x {
            font-size: 5em;
        }

        .fa-6x {
            font-size: 6em;
        }

        .fa-7x {
            font-size: 7em;
        }

        .fa-8x {
            font-size: 8em;
        }

        .fa-9x {
            font-size: 9em;
        }

        .fa-10x {
            font-size: 10em;
        }

        .fa-fw {
            text-align: center;
            width: 1.25em;
        }

        .fa-ul {
            list-style-type: none;
            margin-left: 2.5em;
            padding-left: 0;
        }

        .fa-ul>li {
            position: relative;
        }

        .fa-li {
            left: -2em;
            position: absolute;
            text-align: center;
            width: 2em;
            line-height: inherit;
        }

        .fa-border {
            border: solid 0.08em #eee;
            border-radius: 0.1em;
            padding: 0.2em 0.25em 0.15em;
        }

        .fa-pull-left {
            float: left;
        }

        .fa-pull-right {
            float: right;
        }

        .fa.fa-pull-left,
        .fas.fa-pull-left,
        .far.fa-pull-left,
        .fal.fa-pull-left,
        .fab.fa-pull-left {
            margin-right: 0.3em;
        }

        .fa.fa-pull-right,
        .fas.fa-pull-right,
        .far.fa-pull-right,
        .fal.fa-pull-right,
        .fab.fa-pull-right {
            margin-left: 0.3em;
        }

        .fa-spin {
            -webkit-animation: fa-spin 2s infinite linear;
            animation: fa-spin 2s infinite linear;
        }

        .fa-pulse {
            -webkit-animation: fa-spin 1s infinite steps(8);
            animation: fa-spin 1s infinite steps(8);
        }

        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .fa-rotate-90 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .fa-rotate-180 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .fa-rotate-270 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
        }

        .fa-flip-horizontal {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
            -webkit-transform: scale(-1, 1);
            transform: scale(-1, 1);
        }

        .fa-flip-vertical {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
            -webkit-transform: scale(1, -1);
            transform: scale(1, -1);
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
            -webkit-transform: scale(-1, -1);
            transform: scale(-1, -1);
        }

        :root .fa-rotate-90,
        :root .fa-rotate-180,
        :root .fa-rotate-270,
        :root .fa-flip-horizontal,
        :root .fa-flip-vertical,
        :root .fa-flip-both {
            -webkit-filter: none;
            filter: none;
        }

        .fa-stack {
            display: inline-block;
            height: 2em;
            position: relative;
            width: 2.5em;
        }

        .fa-stack-1x,
        .fa-stack-2x {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
        }

        .svg-inline--fa.fa-stack-1x {
            height: 1em;
            width: 1.25em;
        }

        .svg-inline--fa.fa-stack-2x {
            height: 2em;
            width: 2.5em;
        }

        .fa-inverse {
            color: #fff;
        }

        .sr-only {
            border: 0;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            clip: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            position: static;
            width: auto;
        }

        .svg-inline--fa .fa-primary {
            fill: var(--fa-primary-color, currentColor);
            opacity: 1;
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa .fa-secondary {
            fill: var(--fa-secondary-color, currentColor);
            opacity: 0.4;
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-primary {
            opacity: 0.4;
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-secondary {
            opacity: 1;
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa mask .fa-primary,
        .svg-inline--fa mask .fa-secondary {
            fill: black;
        }

        .fad.fa-inverse {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="App">
        <div class="header">
            <a href="index.html">
                <img src="images/Logoupdated1.png" alt="Sigma Library">
            </a>
            <ul>
                <li><a href="index.php">Home</li></a>
                <li><a href="Books.php">Books</li></a>
                <li><a href="aboutus.php">About Us</li></a>
                <?php 
            if($id['role'] == 'admin'){ 
                echo '<li><a href="dashboard.php">Dashboard</li></a>';
            }
            ?>
            
                <li><a href ="logOut.php">LogOut</li></a>
            </ul>
        </div>

        <div id="books-body">
            <main id="books-main">
                <div class="books-container">
                    <div class="row">
                        <div class="book-selected-top">
                            <a class="book-link" href="index.php">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left"
                                    class="svg-inline--fa fa-arrow-left fa-w-14 " role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="book-selected">
                            <figure class="book-selected-figure">
                                <img src="<?php echo $record['photo'];?>" alt="" class="book-img">
                            </figure>
                            <div class="book-selected-description">
                                <h2 class="book-selected-title"><?php echo $record['name']?></h2>
                                <div class="book-ratings">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        class="svg-inline--fa fa-star fa-w-18 " role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        class="svg-inline--fa fa-star fa-w-18 " role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        class="svg-inline--fa fa-star fa-w-18 " role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        class="svg-inline--fa fa-star fa-w-18 " role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        class="svg-inline--fa fa-star fa-w-18 " role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="book-selected-price">
                                    <div class="book-price">
                                       <h3> <?php echo $record['price'];?></h3>
                                    </div>
                                </div>
                                <div class="book-summary">
                                    <h3 class="book-summary-title">Summary</h3>
                                    <p class="book-summary-para" ><?php echo $record['description'];?></p>
                                    <br>
                                    <h3>Buy At:</h3>
                                    <a href="<?php echo $record['link'];?>"><img src="1.jpg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="books-container">
                    <div class="row">
                        <div class="book-selected-top">
                            <h2 class="book-selected-title-top">Recommended Books</h2>
                        </div>
                        <div class="books">
                        <?php
                                    require_once("Book.php");
                                        $libri = new Book();
                                        $all = $libri->readRandomData();
                                    ?>
                                    
                                        <?php 
                                        $i=0;
                                        foreach($all as $key => $value){
                                            if(++$i==5){
                                                break;
                                            } ?>
                                            <div class="book">
                                            <div class="foto">
                                            <a href="book1.php? id=<?php echo  $value['id']?>">
                                            <img  src="<?php echo $value['photo'] ?>" class="book-img">
                                        </div>
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
                                        <span class="book-price-normal"><?php echo $value['price']?></h5>
                                        </div>    </div><?php }?>
                                                    </div>
                    </div>
                </div>        
            </main>
        </div>
</body>

</html>