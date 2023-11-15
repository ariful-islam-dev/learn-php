<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date in PHP</title>
</head>
<body>
    <?php
        echo date("l"); echo "<br>";

        echo date("d/m/y");echo "<br>";
        echo date("d.m.y");echo "<br>";
        echo date("d-m-y");echo "<br>";
    ?>
    <br>
    &copy; 2010 - <?php echo date("Y")?>;
    <br>
    <h5>This is time <?php echo date("H:i:sa")?></h5>

    <br>
    <?php
    $d=mktime(11, 14, 54, 8, 12, 2014);
    echo "Created date is " . date("Y-m-d h:i:sa", $d);
    ?>
    <br>
    <?php
        $d = strtotime("10:30pm April 15 2014");
        echo "Created date is " . date("Y-m-d h:i:sa", $d);
    ?>

    <br>
    <?php 
        $d = strtotime("tomorrow");
        echo date("Y-m-d h:i:sa", $d) . "<br>";

        $d = strtotime("next Saturday");
        echo date("Y-m-d h:i:sa", $d) . "<br>";

        $d = strtotime("+3 Months");
        echo date("Y-m-d h:i:sa", $d) . "<br>";
    ?>

    <br>
    <?php 
    $startDate = strtotime("Saturday");
    $endDate = strtotime("+6 weeks", $startDate);
    while($startDate < $endDate){
        echo date("M d", $startDate) . "<br>";
        $startDate = strtotime("+1 week", $startDate);
    }
    ?>

    <br>
    <?php

    $d1 = strtotime("July 04");
    $d2 = ceil(($d1-time())/60/60/24);
    echo "There are " . $d2 . " days until 4th of July.";
    ?>
</body>
</html>