<?php
include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard</title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
      
         <div class="main">
            <section class="signup">
                <div class="container">
                    <div class="signup-content" style="text-align:center">
                        <?php 
                    require_once 'session.php';
                   
                    if(isset($_SESSION['username']))
                    {
                        ?>
						
                        <h1 style="text-align:center">Welcome</h1>
                        <div
                            style="text-align:left;border:1px solid tomato;padding:30px;border-radius:5px;border-left:5px solid tomato">
                           <div class="mt-5"> <button type="submit" name="submit" value="submit"><a href="editpage.php">Edit</a></button> </div>
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

                                    // Display user details.
                                    echo
                                    "<p>Firstname: <b>".$name."</b></p>
									<p>Lastname: <b>".$lastname."</b></p>
                                    <p>Email: <b>".$email."</b></p>
                                    <p>phonenumber: <b>".$phonenumber."</b></p>
                                    <p>dob: <b>".$dob."</b></p>";
                                }
                            }
                            ?>
                            <a href="changepassword.php">changepassword</a><br>
                            <a href="homepage.php">home page</a><br>
                            <a href="logout.php" class="loginhere-link"
                                style="background:tomato;padding:5px;color:white;border-radius:5px;text-decoration:none;">Logout</a>
                        </div>
                        <?php
                    } else{
                        header("Location: login.php");
                    }
                    ?>

                    </div>
                </div>
            </section>

        </div> 


        

    </body>

</html>















<!-- 
<!DOCTYPE html>
<html>
<head>
	<title>Edit User details</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body class="all">

    <form action="" method="post">
		
    <button type="submit" name="submit" value="submit"><a href="editpage.php">Edit</a></button>
     	<h2>Profile</h2>
        
     	<label>First Name</label>
     	<input type="text" name="firstname" placeholder="First Name" required><br>

        <label>Last Name</label>
     	<input type="text" name="lastname" placeholder="Last Name" required><br>

        <label>Phone Number</label>
     	<input type="email" name="phonenumber" placeholder="Phone Number" required><br>
        
        <a href="changepassword.php">Change Password</a><br>

        <a href="logout.php">Logout</a>

        <button type="submit" name="submit" value="submit"><a href="homepage.php">Submit</a></button>


       
     </form>   -->
	
 
	 <?php
        // include 'login.php';
		?>

   
<!-- </body> 
</html> -->