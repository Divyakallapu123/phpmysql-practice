<?php
include('connect.php');
require_once 'session.php';


// if(isset($_SESSION['id']))
// {
// 	header('location:index.php');
// }
// if(isset($_REQUEST['submit']))
// {
// 	$firstname=$_REQUEST['firstname'];
// 	$lastnamae=$_REQUEST['lastname'];
// 	$email=$_REQUEST['email'];
	
// 	if((!empty($firstname)) && (!empty($lastname)) && (!empty($email))){
// 		$userId=$_SESSION['id'];
// 		$up=mysqli_query($con,"UPDATE `signup` SET `firstname`='$firstname',`lastname`='$lastnamae',`email`='$email'");
        
// 		$_SESSION['successMsg']="profile has been updated";
// 		header('location:profile.php');
// 		exit;
// 	}
// }
// $userId=$_SESSION['id'];
// $getData=mysqli_query($con,"SELECT * FROM `signup` WHERE `id`='$userId'");
// $row=mysqli_fetch_assoc($getData);

?>


<?php 

// $sql="Select * from `signup` where email='$email'";
// $result=mysqli_query($con,$sql);
// $row=mysqli_fetch_assoc($result);
// $name=$row['firstname'];
// $lastname=$row['lastname'];
// $phonenumber=$row['phonenumber'];



// if(isset($_POST['submit'])){
//     $name=$_POST['firstname'];
//     $lastname=$row['lastname'];
// 	$phonenumber=$row['phonenumber'];

//     $sql="UPDATE `signup` set firstname='$name',lastname='$lastname', $phonenumber='phonenumber' WHERE firstname='$firstname'";
//     $result=mysqli_query($con,$sql);
//     if($result){
//         echo "updated successfully";
//         header('location:display.php');
//     }else{
//         die(mysqli_error($con));
//     }
// }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit User details</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body class="all">
<?php
                            $sql = "SELECT * FROM `signup` WHERE email='".$_SESSION['username']."'";
                            $users_query = mysqli_query($con,$sql);
                            if(mysqli_num_rows($users_query)==1){
                                while($row=mysqli_fetch_array($users_query))
                                {
                                    $name=$row['firstname'];
									$lastname=$row['lastname'];
                                    $email=$row['email'];
                                    $phonenumber=$row['phonenumber'];
                                    $dob=$row['dob'];
								}
							}
									?>
    <form action="Profile_update.php" method="POST">
	
            firstname: <input type="text" value ="<?php echo $name ?>" name="firstname"><br>
 
            lastname: <input type="text" value = "<?php echo $lastname ?>" name="lastname"><br>

            email: <input type="email" value = "<?php echo $email ?>" name="email" readonly><br>

			phonenumber: <input type="text" value = "<?php echo $phonenumber ?>" name="phonenumber"><br>

			dob: <input type="date" value = "<?php echo $dob ?>" name="dob"><br>
   
            <input type="submit" name="edit">
   
        </form>
		<?php
            // $sql="SELECT * FROM `signup` WHERE firstname='$name'";

			// $Results = mysqli_query($con,$sql);

			// if($Results){
			// 	if(mysqli_num_rows($Results)>0){
			// 		while($row = mysqli_fetch_array($Results)){
			// 			print_r($row['firstname']);

		?>
		  
		<?php
              
			// 		}
			// 	}
			// }

	    ?>
    <!-- <h2>Edit User Details</h2> -->
        
		<!-- <label>First Name</label>
		<input type="text"  name="firstname" placeholder="First Name" value=> <br>

	    <label>Last Name</label>
		<input type="text"  name="lastname" placeholder="Last Name" value=><br>

	   <label>Phone Number</label>
		<input type="text"  name="phonenumber" placeholder="Phone Number"  value=><br>
	   
	   <a href="changepassword.php">Change Password</a><br>

	   <a href="logout.php">Logout</a>

	   <button type="submit" name="submit" value="submit"><a href="homepage.php">Submit</a></button>
    


       
     </form>   -->
	
	 
	 <?php
        // include 'login.php';
		?>




   
</body> 
</html>