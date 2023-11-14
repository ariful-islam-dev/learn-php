<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort in PHP</title>
</head>
<body>
    <?php 
    $cars = array("volvo", "BMW", "Toyota");
    sort($cars);
    echo $cars[0];
    ?>

    <br>
    <?php 
    $numbers = array(4, 6, 2, 22, 11);
    sort($numbers);
    for($x = 0; $x < count($numbers); $x++){
        echo($numbers[$x]);
        echo "<br>";
    }
    ?>

    <br>
    <?php
        $numbers = array(4, 6, 2, 22, 11);
        rsort($numbers);
        for($x = 0; $x < count($numbers); $x++){
            echo($numbers[$x]);
            echo "<br>";
        }
    ?>

    <br>
    <?php # ascending order by value;
        $numbers = array("four" => 4, "six"=>6, "two"=>2, "twentySix"=>22, "eleven"=>11);
        asort($numbers);
        foreach($numbers as $x => $value){
            echo "Key=" . $x . ", Value=" . $value;
            echo "<br>";
        }
    ?>
    <br>
    <?php # ascending order by key;
        $numbers = array("four" => 4, "six"=>6, "two"=>2, "twentySix"=>22, "eleven"=>11);
        ksort($numbers);
        foreach($numbers as $x => $value){
            echo "Key=" . $x . ", Value=" . $value;
            echo "<br>";
        }
    ?>

<br>
    <?php # descending order by value;
        echo "<h2>Descending order by value</h2>";
        $numbers = array("four" => 4, "six"=>6, "two"=>2, "twentySix"=>22, "eleven"=>11);
        arsort($numbers);
        foreach($numbers as $x => $value){
            echo "Key=" . $x . ", Value=" . $value;
            echo "<br>";
        }
    ?>
<br>
    <?php # descending order by keys;
        echo "<h2>Descending order by key</h2>";
        $numbers = array("four" => 4, "six"=>6, "two"=>2, "twentySix"=>22, "eleven"=>11);
        krsort($numbers);
        foreach($numbers as $x => $value){
            echo "Key=" . $x . ", Value=" . $value;
            echo "<br>";
        }
    ?>
</body>
</html>