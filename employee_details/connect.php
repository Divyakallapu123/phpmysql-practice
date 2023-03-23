<?php

$con=new mysqli('localhost','root','','employee_details');
if(!$con){
    die(mysqli_error($con));
}

?>