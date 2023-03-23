<?php

require_once 'constants.php';
$con=new mysqli('localhost','root','','user_registrationforms');
if(!$con){
    die(mysqli_error($con));
}

?>