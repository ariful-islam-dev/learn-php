<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <?php
        // Define variables and set to empty values;
        $name = $email = $gender = $comment = $website = "";
        $nameErr = $emailErr = $genderErr = $websiteErr = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            # Name
            if(empty($_POST["name"])){
                $nameErr = "Name is required";
            }else{
                $name = testInput($_POST["name"]);
                // check if name only contains letters and whitespace
                if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
                    $nameErr = "Only letters and white space allowed";
                }
            }
            # Email 
            if(empty($_POST["email"])){
                $emailErr = "Email is required";
            }else{
                $email = testInput($_POST["email"]);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Invalid email format";
                }
            }
            # Website 
            if(empty($_POST["website"])){
                $websiteErr = "";
            }else{
                $website = testInput($_POST["website"]);
                // check if URL address syntax is valid (This regular expression also allows dashes in the URL)
                if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[ -a-z0-9+&@#\/%?=~_|!:,.;]*[ -a-z0-9+&@#\/%=~_|]/i", $website)){
                    $websiteErr = "Invalid URL";
                }
            }
            # Gender 
            if(empty($_POST["gender"])){
                $genderErr = "Gender is required";
            }else{
                $gender = testInput($_POST["gender"]);
            }
            # Comment 
            
                $comment = testInput($_POST["comment"]);
            
            
        }

        function testInput($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        };
    ?>

    <h2>PHP Form Validation Example</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Name: <input type="text" name="name"><br><span class="error"><?php echo $nameErr;?></span><br><br>
        E-mail: <input type="email" name="email"><br><span class="error"><?php echo $emailErr;?></span> <br><br>
        Website: <input type="text" name="website"><br><span class="error"><?php echo $websiteErr;?></span><br><br>
        Comment: <br> <textarea name="comment" id="" cols="40" rows="10"></textarea> <br><br>
        Gender: 
        <input type="radio" name="gender" value="female">Female 
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other"> Other <br>
        <br><span class="error"><?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php 
        echo "<h2>Your Input:</h2>";
        echo $name ? "Your name is  $name": ""; echo"<br>";
        echo $email ?"Your email is $email ": ""; echo"<br>";
        echo $website ?"Your website address is $website": ""; echo"<br>";
        echo $comment ?"Your Opinion is: $comment":""; echo"<br>";
        echo $gender ?"Your are $gender": ""; echo"<br>";

    ?>
</body>
</html>