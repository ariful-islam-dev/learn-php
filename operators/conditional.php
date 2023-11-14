<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Operators</title>
</head>
<body>
    <?php
       echo $status = (empty($user))? "anonymous": "Login in";
       echo("<br>");
       $user = "John Doe";

       echo $status = (empty($user)) ? "anonymous" : "logged in";
    ?>
</body>
</html>