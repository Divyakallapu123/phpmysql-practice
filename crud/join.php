

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
      <th scope="col">employeeid</th>
      <th scope="col">e_Name</th>
      <th scope="col">e_mobile</th>
      <th scope="col">d_firstname</th>
      <th scope="col">d_lastname</th>
      <th scope="col">departmentid</th>
      <!-- <th scope="col">password</th> -->
      <!-- <th scope="col">operations</th> -->
    </tr>
  </thead>
  <tbody>
    
    <?php
    
    // $sql="SELECT employeeid, employeename, employeemobile, firstname, lastname ,departmentid
    // FROM  department as dept, employee as emp
    // WHERE dept.departmentid = emp.employeeid";

    $sql="SELECT employeeid,employeename,employeemobile,firstname,lastname,departmentid
    FROM employee as emp JOIN department as dept
    ON dept.departmentid = emp.employeeid";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
           $id=$row['employeeid'];
           $name=$row['employeename'];
           $mobile=$row['employeemobile'];
           $firstname=$row['firstname'];
           $lastname=$row['lastname'];
           $departmentid=$row['departmentid'];
           echo '<tr>
           <th scope="row">'.$id.'</th>
           <td>'.$name.'</td>
           <td>'.$mobile.'</td>
           <td>'.$firstname.'</td>
           <td>'.$lastname.'</td>
           <td>'.$departmentid.'</td>
           
         </tr>';
        }
     }

    ?>

 


  </tbody>
</table>
    
  </div>
  
    

  </body>
</html>