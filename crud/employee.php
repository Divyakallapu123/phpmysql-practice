<?php 
include 'connect.php';
if(isset($_POST['submit'])){
    // $name=$_POST['employeeid'];
    $name=$_POST['employeename'];
    $mobile=$_POST['employeemobile'];
    $password=$_POST['password'];

    $sql="insert into `employee` (employeename,employeemobile,password) 
    values('$name','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data inserted successfully";
        header('location:employeedetails.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    
   <div class="container my-5">

     <form action="" method="post">
  <div class="form-group">
    <label>employee name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="employeename">
  </div>
  <div class="form-group">
    <label>employee mobile</label>
    <input type="text" class="form-control" placeholder="Enter your email" name="employeemobile">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter your Mobile number" name="password">
  </div>
  <!-- <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter your Password" name="password">
  </div> -->
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
   </div>

    



    
  </body>
</html>