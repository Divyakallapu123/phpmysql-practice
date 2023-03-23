<?php

if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $name = "admin";
        $password = "ad";
        if($user==$name){
           if($pass==$password){
            echo "<h1>Login Success</h1>";
           }else{
            echo "<h1>Un authenticated</h1>";
           }
        }else{
          echo "<h1>user not exit</h1>";
        }
        
    }

    ?>