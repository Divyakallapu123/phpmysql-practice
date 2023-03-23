
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
   header('location:details.php');
   }else{
       die(mysqli_error(!$con));
   }
// }


?>
