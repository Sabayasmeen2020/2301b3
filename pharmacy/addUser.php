<?php

    include("config.php");

    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_phone = $_POST['user_phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $role_id = $_POST['role_id'];

    $query = "INSERT INTO `users`(`user_name`, `user_email`, `user_phone`, `address`, `city`, `country`, `role_id`) VALUES ('$user_name','$user_email','$user_phone','$address','$city','$country','$role_id')";

    $result = mysqli_query($conn, $query);

    header("Location:users.php");

?>