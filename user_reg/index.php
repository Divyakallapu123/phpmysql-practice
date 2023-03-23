<?php
  include 'connect.php';
  session_start();

  if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['password'];

	$result=mysqli_query($con,"SELECT * FROM  `signup` WHERE email='$email'");
	if(mysqli_num_rows($result) > 0){
		$result=mysqli_query($con,"SELECT * FROM  `signup` WHERE email='$email' AND password = '$password'");
	   if(mysqli_num_rows($result) > 0){
             $_SESSION['username'] = $email;
			 header("Location:homepage.php");
	   }
	   else{
		echo
		"<script> alert('Wrong password');</script>";
	   }
	}else{
       echo
	   "<script> alert('user not registered');</script>";
	}
  }


?>


<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body class="all">
 <div>
    <form action="" method="post">
     	<h2>LOGIN</h2>
        
     	<label>User email</label>
     	<input type="email" name="email" placeholder="User Name" autocomplete="off" required><br>

     	<label>User password</label>
     	<input type="password" name="password" placeholder="User Password" required><br>
         
     	<button type="submit" name="submit" value="submit">Login</button>

        <p><a href="forgotpassword.php">forgot password</a></p>

        <p><a href="signup.php">Don't have an account yet?sign up!</a></p>
    </form>  
	 
	 
	 <?php
        // include 'login.php';
		?>
    </div>
   
</body> 
</html>