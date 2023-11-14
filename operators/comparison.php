<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Operators</title>
</head>
<body>
    <?php 
        $x = 100;
        $y = "100";

        var_dump( $x <> $y);
    ?>

    <br>
    <?php
        $x = 5;
        $y = 10;

        echo ($x <=> $y);
    ?>
</body>
</html>