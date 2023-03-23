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
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">empname</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">username</th>
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
         $id = $row["emp_id"];
          $empname = $row["emp_name"];
          $email = $row["email"];
          $phone = $row["phone"];
          $username = $row["username"];
          echo '<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$empname.'</td>
          <td>'.$email.'</td>
          <td>'.$phone.'</td>
          <td>'.$username.'</td> 
        </tr>';
       }
    }

    ?>

 


  </tbody>
</table>
    
  </div>
  
    





  </body>
</html>