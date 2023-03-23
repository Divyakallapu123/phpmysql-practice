<?php
require_once 'connect.php';
$email= $_POST['email'];
$password= $_POST['new_password'];
$confirm_password= $_POST['confirm_new_password'];
if($password==$confirm_password){
    if(strlen($email)>0 && strlen($password)>0){
        $select="SELECT * FROM `signup` WHERE email='$email'";
        $getUser = mysqli_query($con,$select);
        if(mysqli_num_rows($getUser)==1){
            $update = "UPDATE signup SET password='$password' WHERE email='$email'";
            $updateUser = mysqli_query($con,$update);
            if($updateUser){
                echo "<script>alert('Reset Password Successfully!');window.location.href='index.php';</script>";
                
            } else{
                echo "<script>alert('Reset Password Failed!');</script>";
            }
        } else{
            echo "<script>alert('User not found');</script>";
        }
    } else{
        echo "<script>alert('Please fill all the mandatory fields');</script>";
    }
} else{
    echo "<script>alert('Passwords are not matching');window.location.href='forgotpassword.php';</script>";
}
?>