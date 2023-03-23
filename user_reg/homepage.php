<?php
include 'connect.php';
// session_start();
//    if(isset($_SESSION['firstname'])){
// 	 header("location: index.php");
//    }
// if(isset($_SESSION['id']) && isset($_SESSION['firstname'])){


	// $userId=$_SESSION['loggedinId'];
	// $getData=mysqli_query($con,"SELECT * FROM `signup` WHERE `id` = '$userId'")
    // $row = mysqli_fetch_assoc($getData);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="we">
	<?php
	if(isset($_SESSION['firstname'])){
		?>
		<!-- <h3>log in to access data</h3> -->
		<?php
	}else{

	?>
<!-- <button type="button" name="submit" value="submit"><a href="index.php">Login</a></button>	
<button type="button" name="submit" value="submit"><a href="signup.php">Sign Up</a></button>	 -->
<button type="button" name="submit" value="submit"><a href="profile.php">Profile</a></button>
<h1 class="text-center welcome mt-5">WELCOME
</h1> 
	<?php
	}
	?>
</div>



</body> 
</html>


<?php
// }else{
// 	header("Location: index.php");
// 	exit();
// }

?>