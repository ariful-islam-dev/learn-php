<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> For Loop</title>
</head>
<body>
    <?php
        for($x = 0; $x <= 10; $x++){
            echo "the number is: $x <br>";
        }
    ?>
    <br>
    <?php
        $colors = array("red", "green" , "blue", "yellow");

        foreach($colors as $value){
            echo "$value <br>";
        }
    ?>

    <br>
    <?php
        $age = array("Peter" => "35", "Ben" =>"37", "joe"=>"43");
        foreach($age as $x => $val){
            echo "$x = $val <br>";
        }
    ?>
</body>
</html>