<?php 
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];

    $sql="update `crud` set id=$id,name='$name',email='$email',mobile='$mobile' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "updated successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>