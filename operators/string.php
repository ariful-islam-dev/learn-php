<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operators</title>
</head>
<body>
    <?php 
        $txt1 = "Hello";
        $txt2 = " World";

        echo ($txt1 . $txt2);
    ?>

    <br>
    <?php
        $txt1 = "Hello";
        $txt2 = " World";
        $txt1 .= $txt2;

        echo $txt1;
    ?>
</body>
</html>