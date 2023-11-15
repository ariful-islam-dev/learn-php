<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Include</title>
    <style>
        .menu a{
            text-decoration: none;
            font-weight: bold;padding: 5px 10px;
            
        }
        .menu a:hover{
            background: hsl(120, 100%, 50%);
            color: white;
            border-radius: 5px;
            transition: .5s all ease;
            
        }
    </style>
</head>
<body>
    <div class="menu">
        <?php include "menu.php"?>
    </div>
    
<h1>Welcome to my home page!</h1>
<?php 
    echo readfile("webdictionary.txt");
?>
<p>Some text.</p>
<p>Some more text.</p>
<?php include 'vars.php';
echo "I have a $color $car .";
?>
<?php include 'footer.php';?>
</body>
</html>