<?php
    include("config.php");
    $query = "SELECT * FROM roles";
    $result = mysqli_query($conn, $query);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <a href="users.php" class="btn btn-success float-end me-5 mt-5">User list</a>
        <br>
        <br>
        <br>
    <form action="addUser.php" method="post" class="form w-50 mx-auto bg-light p-5 mt-4">
        <h1 class="display-3 text-center">Add User</h1>
        <input class="form-control mt-1" placeholder="user_name" type="text" name="user_name">
        <input class="form-control mt-1" placeholder="user_email" type="email" name="user_email">
        <input class="form-control mt-1" placeholder="user_phone" type="number" name="user_phone">
        <input class="form-control mt-1" placeholder="address" type="text" name="address">
        <input class="form-control mt-1" placeholder="city" type="text" name="city">
        <input class="form-control mt-1" placeholder="country" type="text" name="country">
        <select name="role_id" id="" class="form-control mt-1">
            <?php  
                while($data = mysqli_fetch_assoc($result)){
            ?>
                <option value="<?php echo $data['id']?>"><?php echo $data['role_name']?></option>
            <?php
                }
            ?>
        </select>
        <input class="btn btn-info mt-2 w-50" type="submit" name="submit" value="Submit">
    </form>
</body>
</html>