<?php
include 'connect.php';
// if(!empty($_SESSION['id'])){
// 	header("Location: homepage.php");
// }
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
	$dob=$_POST['dob'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
    
     
	$result=mysqli_query($con,"SELECT * FROM  `signup` WHERE firstname = '$firstname' OR email='$email'");
	if(mysqli_num_rows($result) > 0){
		echo
		"<script> alert('username or email has already taken'); </script>";
	}
	else
	   if($password==$confirmpassword){
		$query = "insert into `signup` (firstname,lastname,email,phonenumber,dob,password,confirmpassword) 
		values('$firstname','$lastname','$email','$phonenumber','$dob','$password','$confirmpassword')";
		mysqli_query($con,$query);
		echo
		"<script> alert('Registered successful'); </script>";
	   }
	   else{
		echo
		"<script> alert('password Does not match'); </script>";
	   }
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body class="all">
  
    <form action="" method="post">

     	<h2 class="signup">Sign up</h2>
        
     	<label>First Name</label>
     	<input type="text" name="firstname" placeholder="First Name" required><br>

        <label>Last Name</label>
     	<input type="text" name="lastname" placeholder="Last Name" required><br>

        <label>Email id</label>
     	<input type="email" name="email" placeholder="Email Id" required autocomplete="off"><br>

		<label>Phone Number</label>
     	<input type="text" name="phonenumber" placeholder="Phone Number" required><br>
        
		<label>DOB</label>
     	<input type="date" name="dob" placeholder="User Password" required><br>

     	<label>password</label>
     	<input type="password" name="password" placeholder="User Password" required><br>

        <label>Confirm password</label>
     	<input type="password" name="confirmpassword" placeholder="Confirm password" required><br>
         
     	<button type="submit" name="submit" value="submit">Sign Up</button>

		

        <p><a href="index.php">Have an account?Login in here!</a></p>
     </form>  

   
</body> 
</html>