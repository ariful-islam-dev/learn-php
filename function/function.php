
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function</title>
</head>
<body>
    <?php 
        function writeMsg(){
            echo "Hello World!";
        }
        writeMsg();
    ?>

    <br>
    <?php
        function familyName($fname){
            echo "$fname Refsnes. <br>";
        }

        familyName("Jani");
        familyName("Hege");
        familyName("Stale");
        familyName("Kai Jim");
        familyName("Borge");
    ?>
    <br>

    <?php
        function familyName2($fname, $year){
            echo "$fname Refsnes. Born in $year <br>";
        }

        familyName2("Hege", "1975");
        familyName2("Stale", "1978");
        familyName2("Kai Jim", "1983");
    ?>
    <br>
    <?php 
    function addNumbers(int $a, int $b){
        return $a + $b;
    }

    echo addNumbers(5, 5);
    ?>

    <br>

    <?php 
    
    function setHeight(int $minHeight=50){
        echo "The height is: $minHeight <br>";
    };

    setHeight(350);
    setHeight();
    setHeight(135);



    ?>

    <br>
    <?php 

    function sum(int $x, int $y){
        $z = $x+$y;
        return $z;
    }

    echo "5+10 = " . sum(5, 10) . "<br>";
    echo "7+13 = " . sum(7, 13) . "<br>";
    echo "2+4 = " . sum(2, 4);
    ?>
    <br>
    <?php 
        function addNumbers1(float $x, float $y){
            return $x + $y;
        };

        echo addNumbers1(1.2, 5.2);
    ?>

    <br>
    <?php 
        function addNumbers3(float $a, float $b) : int{
            return (int)($a+$b);
        }

        echo addNumbers3(1.2, 5.2);
    ?>

    <br>
    <?php 
    function addFive(&$value){
        $value += 5;
    }

    $num = 2;
    addFive($num);
    echo $num;
    ?>
</body>
</html>