<?php
    $id = $_GET['id'];
    include("config.php");
    $query = "SELECT * FROM roles";
    $result = mysqli_query($conn, $query);

    $query1 = "Select * from users where id = $id";
    $result1 = mysqli_query($conn, $query1);
    $data1 = mysqli_fetch_array($result1);
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
    <form action="editUser.php" method="post" class="form w-50 mx-auto bg-light p-5 mt-4">
        <h1 class="display-3 text-center">Edit User</h1>
        <input value="<?php echo $data1['id']?>" class="form-control mt-1" placeholder="user_name" type="hidden" name="user_id">
        <input value="<?php echo $data1['user_name']?>" class="form-control mt-1" placeholder="user_name" type="text" name="user_name">
        <input value="<?php echo $data1['user_email']?>" class="form-control mt-1" placeholder="user_email" type="email" name="user_email">
        <input value="<?php echo $data1['user_phone']?>" class="form-control mt-1" placeholder="user_phone" type="number" name="user_phone">
        <input value="<?php echo $data1['address']?>" class="form-control mt-1" placeholder="address" type="text" name="address">
        <input value="<?php echo $data1['city']?>" class="form-control mt-1" placeholder="city" type="text" name="city">
        <input value="<?php echo $data1['country']?>" class="form-control mt-1" placeholder="country" type="text" name="country">
        <select name="role_id" id="" class="form-control mt-1">
            <?php  
                while($data = mysqli_fetch_assoc($result)){
            ?>
                <option value="<?php echo $data['id']?>" <?php echo $data1['role_id'] == $data['id'] ? "selected" : "" ?> ><?php echo $data['role_name']?></option>
            <?php
                }
            ?>
        </select>
        <input class="btn btn-info mt-2 w-50" type="submit" name="submit" value="Save Changes">
    </form>
</body>
</html>