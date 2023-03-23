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
    <button class="btn btn-primary my-5"><a href="employee.php" class="text-light">Add employee</a></button>
    <button class="btn btn-primary my-5"><a href="department.php" class="text-light">department</a></button>
    <button class="btn btn-primary my-5"><a href="join.php" class="text-light">join</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">employee Name</th>
      <th scope="col">employee mobile</th>
      <th scope="col">password</th>
      <!-- <th scope="col">password</th> -->
      <!-- <th scope="col">operations</th> -->
    </tr>
  </thead>
  <tbody>
    
    <?php
    
    $sql="select * from `employee`";
    $result=mysqli_query($con,$sql);
    if($result){
       while($row=mysqli_fetch_assoc($result)){
          $id=$row['employeeid'];
          $name=$row['employeename'];
          $mobile=$row['employeemobile'];
          $password=$row['password'];
          echo '<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$name.'</td>
          <td>'.$mobile.'</td>
          <td>'.$password.'</td> 
        </tr>';
       }
    }

    ?>

 


  </tbody>
</table>
    
  </div>
  
    





  </body>
</html>