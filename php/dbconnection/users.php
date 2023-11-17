<?php
    include("config.php");
    $query = "Select * from users u join roles r on u.role_id = r.id";
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
    <h1 class="display-2 text-center">User's List</h1>
    <a href="index.php" class="btn btn-success float-end me-5">Add user</a>
    <br>
    <br>
    <br>
    <table class="table table-bordered w-75 mx-auto mt-5">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>City</th>
                <th>Country</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($data = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo $data['user_name']?></td>
                    <td><?php echo $data['user_email']?></td>
                    <td><?php echo $data['user_phone']?></td>
                    <td><?php echo $data['address']?></td>
                    <td><?php echo $data['city']?></td>
                    <td><?php echo $data['country']?></td>
                    <td><?php echo $data['role_name']?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id']?>">Edit</a>
                    </td>
                </tr>
            <?php
                }
            ?>
            
        </tbody>
    </table>
</body>
</html>