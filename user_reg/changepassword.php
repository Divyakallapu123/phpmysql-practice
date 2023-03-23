<?php 
require_once("connect.php");
require_once 'session.php';
// if(isset($_SESSION["login_sess"])) 
// {
//     header("location:index.php"); 
// }
//   $email=$_SESSION["login_email"];

if(!empty($_POST['submit'])){
    $op=$_POST['oldpass'];
    $np=$_POST['newpass'];
    $cnp=$_POST['cnewpass'];
    if($np==$cnp)
    {
           $query="SELECT * from `signup` where password='$op' && email='".$_SESSION['username']."'";
           $result=mysqli_query($con,$query);
           $count=mysqli_num_rows($result);
           if($count>0){
               $query = "UPDATE `signup` set password='$np' where email='".$_SESSION['username']."'";
               mysqli_query($con,$query);
               echo "<script>alert('password updated successfully');window.location.href='profile.php';</script>";
           }else{
               echo "<script>alert('old password does not match');</script>";
           }
    }else{
        echo "<script>alert('new password and confirmpassword does not match');</script>";
    }
}

 ?> 
 <!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="style.css">
</head>
<body class="all">

<form action="" method="post">
     	<h2>LOGIN</h2>
        
     	<label>oldpass</label>
     	<input type="text" name="oldpass" placeholder="oldpass" autocomplete="off" required><br>

     	<label>newpass</label>
     	<input type="text" name="newpass" placeholder="newpass" required><br>
         
         <label>cnewpass</label>
     	<input type="text" name="cnewpass" placeholder="cnewpass" required><br>

     	<button type="submit" name="submit" value="submit">Submit</button>

        <p><a href="forgotpassword.php">forgot password</a></p>

        <p><a href="signup.php">Don't have an account yet?sign up!</a></p>

        <p><a href="profile.php">profile</a></p>
    </form>  
                 
</body>

</html>