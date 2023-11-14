<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Variable</title>
</head>
<body>
    <?php
        $x = 75;
        $y = 25;

        function addition(){
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        addition();
        echo $z;
    ?>

    <h2>Server Info</h2>
    <?php
        echo "SELF:". $_SERVER["PHP_SELF"];
        echo "<br>";
        echo "Server Name:". $_SERVER["SERVER_NAME"];
        echo "<br>";
        echo "Host:". $_SERVER["HTTP_HOST"];
        echo "<br>";
        echo "Referer:". $_SERVER["HTTP_REFERER"];
        echo "<br>";
        echo "Agent:". $_SERVER["HTTP_USER_AGENT"];
        echo "<br>";
        echo "Script Name:". $_SERVER["SCRIPT_NAME"];
        echo "<br>";
        
    ?>

    <h2></h2>
</body>
</html>