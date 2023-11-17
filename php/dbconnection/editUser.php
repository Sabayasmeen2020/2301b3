<?php

    include("config.php");

    $user_id = $_POST['user_id'];
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_phone = $_POST['user_phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $role_id = $_POST['role_id'];

    $query = "UPDATE `users` SET `user_name`='$user_name',`user_email`='$user_email',`user_phone`='$user_phone',`address`='$address',`city`='$city',`country`='$country',`role_id`='$role_id' WHERE id = $user_id";

    $result = mysqli_query($conn, $query);

    header("Location:users.php");

?>