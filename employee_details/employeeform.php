
<?php
   include 'connect.php';
  //  if(isset($_POST['submit'])){
   $empname = $_POST["empname"];
   $email = $_POST["email"];
   $phone = $_POST["phone"];
   $username = $_POST["username"];
   $password = $_POST["password"];

   $sql = "insert into `employee` (emp_name,email,phone,username)
   values ('$empname','$email','$phone','$username')";
   $result=mysqli_query($con,$sql);
   if($result){
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
   }else{
       die(mysqli_error(!$con));
   }
// }


?>
