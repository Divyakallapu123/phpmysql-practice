<?php 
include 'connect.php';
if(isset($_POST['submit'])){
    // $name=$_POST['employeeid'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];

    $sql="insert into `department` (firstname,lastname,email) 
    values('$firstname','$lastname','$email')";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data inserted successfully";
        header('location:departmentdetails.php');
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
    <label>firstname</label>
    <input type="text" class="form-control" placeholder="Enter your firstname" name="firstname">
  </div>
  <div class="form-group">
    <label>lastname</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="lastname">
  </div>
  <div class="form-group">
    <label>email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
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