<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pharmacy";

    $conn = mysqli_connect($host,$username,$password,$dbname);

    echo $conn ? "Connected" : "Nor Connected";
?>
