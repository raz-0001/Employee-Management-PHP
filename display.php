<?php
include 'connection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-5">
        <button class="btn btn-primary"><a href="user.php" class="text-light" style="text-decoration:none" >Add Employee</a></button>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
    $sql="Select * from `crud`";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>
        <th scope='row'>".$row['id']."</th>
        <td>".$row['name']."</td>
        <td>".$row['email']."</td>
        <td>".$row['password']."</td>
        <td>
        <button class='btn btn-primary'><a href='update.php?updateid=".$row['id']."' class='text-light' style='text-decoration:none'>Update</a></button>
        <button class='btn btn-danger'><a href='delete.php?deleteid=".$row['id']."' class='text-light' 
        style='text-decoration:none'>Delete</a></button>
        </td>
      </tr>";
    }
  ?>

  </tbody>
</table>
</div>
  </body>
</html>