<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Submit Form Using AJAX, PHP and javascript</title>
  
  <link href="style1.css" rel="stylesheet"> 
  
 </head>
 <body class="all">
  <form  id="emp_form" name="form">
  <h3>New Employee Registration Form</h3>
  <div>
  <label>Employee Name :</label> 
  <input type="text" name="empname" id="empname"/>
  <label>Email :</label>  
  <input type="text" name="email" id="email"/>
  <label>Phone :</label>  
  <input type="text" name="phone" id="phone"/>
  <label>Username :</label>  
  <input type="text" name="username" id="username"/>
  <label>Password : </label>  
  <input type="password" name="password" id="password"/>
  <label>  </label>  
  <input id="submit" class="submit" onclick="formsubmit()" type="submit" value="Submit">
  </div><br>
  <div id="result"></div>
  </form>
  
</body>
</html>

<script src=https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js></script>

<script>
    $("#submit").click(function(){
      var empname = $("#empname").val();
      var email = $("#email").val();
      var phone = $("#phone").val();
      var username = $("#username").val();
      var password = $("#password").val();
   $.ajax({
		 type: "POST",
		 url: "employeeform.php",
		 data: { 
            empname: empname,
            email: email, 
            phone: phone, 
            username: username, 
            password: password
        },
		 success: function(data) {
		  // alert(data);
          $('#result').html(data);
          

          return true;
		 }
	});
    return false;
});
</script>    


