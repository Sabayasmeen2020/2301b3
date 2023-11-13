<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formget.php" method="GET">
        <input type="text" name="user_name">
        <input type="submit" value="Submit">
    </form>
    <form action="formpost.php" method="POST">
        <input type="text" name="username">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    // if(isset($_GET["submit"])){
    //     $username = $_GET["username"];
    //     echo $username;
    // }
?>