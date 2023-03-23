

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post" id="loginn">
     	<h2>LOGIN</h2>
        
     	<label>User Name</label>
     	<input type="text" name="username" placeholder="User Name"><br>

     	<label>User password</label>
     	<input type="password" name="password" placeholder="User Password"><br>
         
     	<button type="submit" name="submit" value="submit">Login</button>
     </form>  
	 <div id="result"></div>
	 
	 <?php
        include 'login.php';
		?>

   
</body> 
</html>