<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Operators</title>
</head>
<body>
    <?php 
        $x = array("a"=> "red", "b" => "green");

        $y = array("c" => "blue", "d" => "yellow");

        print_r($x + $y);
        echo "<br>";

        var_dump($x == $y);
        echo "<br>";
        var_dump($x === $y);
    ?>
</body>
</html>