<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if Condition</title>
</head>
<body>
    <?php
       $t = date("H");

       if($t < "20"){
        echo "Have a good day!";
       };
    ?>
    <br>
    <?php 
        $t = date("H");
        if($t < "20"){
            echo "Have a good day!";
        }else{
            echo "Have a goode night!";
        }
    ?>

    <br>
    <?php 
        $t = date("H");

        if($t < "10"){
            echo "Have a good morning!";
        }elseif($t < "20"){
            echo "have a good day";
        }else{
            echo "Have a good night!";
        }
    ?>
</body>
</html>