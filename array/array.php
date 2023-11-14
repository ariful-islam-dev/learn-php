<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array of PHP</title>
</head>
<body>
    <?php 
        $cars = array("Volvo", "BMW", "Toyota");
        echo "I Like ". $cars[0] .", " . $cars[1] . " and " . $cars[2] . ".";
        echo count($cars);
    ?> 
    <br>
    <?php 
     $fruit = array("Jak", "Mango", "Orange");
     $arrLength = count($fruit);
        for($x =0; $x < $arrLength; $x++){
            echo $fruit[$x];
            echo "<br>";
        }
    ?>

    <br>
    <?php

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        echo "Peter is " . $age['Peter'] . " Years old";
    ?>

    <br>
    <?php 
    $age = array("Peter" => "35", "Ben" =>"37", "Joe"=> "45");

    foreach($age as $x => $x_value){
        echo "Key =" .$x . ", Value =". $x_value;
        echo "<br>";
    }
    ?>

    <br>

    <?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>
</body>
</html>