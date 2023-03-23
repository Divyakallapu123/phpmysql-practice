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
    <button class="btn btn-primary my-5"><a href="employee.php" class="text-light">add employee</button>
    <button class="btn btn-primary my-5"><a href="department.php" class="text-light">add deportment</button>
    <button class="btn btn-primary my-5"><a href="join.php" class="text-light">join</button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">d_FirstName</th>
      <th scope="col">d_LastName</th>
      <th scope="col">d_Email</th>
      <!-- <th scope="col">password</th> -->
      <!-- <th scope="col">operations</th> -->
    </tr>
  </thead>
  <tbody>
    
    <?php
    
    $sql="select * from `department`";
    $result=mysqli_query($con,$sql);
    if($result){
       while($row=mysqli_fetch_assoc($result)){
          $id=$row['departmentid'];
          $firstname=$row['firstname'];
          $lastname=$row['lastname'];
          $email=$row['email'];
          echo '<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$firstname.'</td>
          <td>'.$lastname.'</td>
          <td>'.$email.'</td>
          
        </tr>';
       }
    }

    ?>

 


  </tbody>
</table>
    
  </div>
  
    





  </body>
</html>