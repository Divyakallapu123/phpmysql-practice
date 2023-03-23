<?php
//  include 'connect.php';
//  session_start();

//  if(isset($_POST['submit']))
//  {
//     $id=$_SESSION['id'];
//     $fname=$_POST['firstname'];
//     $lname=$_POST['lastname'];
//     $email=$_POST['email'];
//     $select= "SELECT * FROM `signup` WHERE id='$id'";
//     $sql = mysqli_query($con,$select);
//     $row = mysqli_fetch_assoc($sql);
//     $res= $row['id'];
//     if($res === $id)
//     {
   
//        $update = "UPDATE `signup` set firstname='$fname',lastname='$lname',email='$email' where id='$id'";
//        $sql2=mysqli_query($con,$update);
// if($sql2)
//        { 
//            /*Successful*/
//            "<script>alert('updated successfully');window.location.href='profile.php';</script>";
//        }
//        else
//        {
//            /*sorry your profile is not update*/
//         //    header('location:editpage.php');
//         echo "$id";
//         "<script>alert('sorry your profile is not update');</script>";
//        }
//     }
//     else
//     {
//         /*sorry your id is not match*/
//         // header('location:editpage.php');
//         echo "sorry your id is not match";
//         "<script>alert('sorry your id is not match');</script>";
//     }
//  }

 
require_once 'session.php';
 include "Connect.php";
 if(isset($_POST['edit']))
 {
    
    $fname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $dob=$_POST['dob'];
    $select= "SELECT * FROM `signup` WHERE email='".$_SESSION['username']."'";
    $sql = mysqli_query($con,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['username'];


    if($res == $firstname)
    {
   
       $update = "UPDATE `signup` set firstname='$fname',lastname='$lastname',email='$email',phonenumber='$phonenumber',dob='$dob' WHERE email='".$_SESSION['username']."'";
       $sql2=mysqli_query($con,$update);
if($sql2)
       { 
           /*Successful*/
           $_SESSION['username'] = $email;
           echo "<script>alert('updated successfully');window.location.href='profile.php';</script>";
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:editpage.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:editpage.php');
    }
 }


?>