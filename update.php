<?php

include 'connection.php';
$id=$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql) ;
$row=mysqli_fetch_assoc($result); 

if(isset($_POST['submit'])){

  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];


$sql="update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
$result=mysqli_query($con,$sql);
if($result){
  header('location:display.php');
}
else{
  die(mysli_error($con));
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <div class="container my-5">
  <form method="post">
  <div class="mb-3">
    <label>Employee Name</label>
    <input type="text" class="form-control" placeholder="Enter name" name="name" automcomplete="off" value=<?php echo $row['name']?>>
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email" automcomplete="off" value=<?php echo $row['email']?>>
  </div>
  <div class="mb-3">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter mobile" name="mobile" automcomplete="off" value=<?php echo $row['mobile']?>>
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter password" name="password" automcomplete="off" value=<?php echo $row['password']?>>
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
    
  </body>
</html>