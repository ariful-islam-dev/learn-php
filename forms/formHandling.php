<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="welcome.php" method="post">
        Name: <input type="text" name="name"> <br>
        Email: <input type="text" name="email"><br>
        <input type="submit">

    </form>

    <br>
    <form action="welcome_get.php" method="get">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="email" name="email"><br>
        <input type="submit">
    </form>
</body>
</html>