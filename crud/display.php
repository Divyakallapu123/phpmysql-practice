<?php 
include 'connect.php';?>


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
    
  <div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</button>
    <button class="btn btn-primary my-5"><a href="employee.php" class="text-light">employee</button>
    <button class="btn btn-primary my-5"><a href="department.php" class="text-light">deportment</button>
    <button class="btn btn-primary my-5"><a href="join.php" class="text-light">join</button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <!-- <th scope="col">password</th> -->
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
    
    $sql="select * from `crud`";
    $result=mysqli_query($con,$sql);
    if($result){
       while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $name=$row['name'];
          $email=$row['email'];
          $mobile=$row['mobile'];
          $password=$row['password'];
          echo '<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$name.'</td>
          <td>'.$email.'</td>
          <td>'.$mobile.'</td>
          <td>
          <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
          <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>  
          </td>  
        </tr>';
       }
    }

    ?>

 


  </tbody>
</table>
    
  </div>
  
    





  </body>
</html>