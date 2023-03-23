<?php
include 'connect.php';
if (isset($_POST['submit'])){
	if (mysqli_query($con,"UPDATE `signup` SET password='$_POST[password]' WHERE email='$_POST[email]'")){
		
//    ?>
//       <script>
           alert("password updated successfully")
		   header("Location:index.php");
// 	  </script>
//    <?php
	} 
}
?>

 <!DOCTYPE html>
<html>
<head>
	<title>Get Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body class="all">
<?php
       // If already logged in then redirect to dashboard.
	   require_once 'connect.php';
        require_once 'session.php';
        $logged_in=isset($_SESSION['email']);
        if($logged_in)
        {
            header('location:profile.php');
        } else{
            // If not logged in then display forgot page.
            ?>
    <form method="POST" action="reset.php">
     	<h2>Forgot Password</h2>
        
     	<label>Enter Your Email</label>
     	<input type="email" name="email" placeholder="Enter Your Email ID" required autocomplete="off"><br>

     	<!-- <label>New password</label>
     	<input type="password" name="password" placeholder="New password" required><br>
         
        <label>Confirm password</label>
     	<input type="password" name="confirmpassword" placeholder="Confirm password" required><br> -->

         <div class="form-group">
          <input type="submit" name="submit" id="submit" class="form-submit" value="Submit" />
          </div>

     	<!-- <button type="submit" name="submit" value="submit">Submit</button> -->
        <a href="index.php">login</a>

     </form>  

	 <p><a href="signup.php" class="loginhere-link">< Go Back to Sign In</a></p>
	
	 <?php
        }
        ?>

   
</body> 
</html>


