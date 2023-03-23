<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $gender = $_POST['gender'];
        $mail = $_POST['email'];
        $phoneCode = $_POST['phoneCode'];
        $phone = $_POST['phone'];
      }
        ?>

  <?php if($user=="admin" && $pass=="ad"){?>
              <?php  echo "Already logged in"; ?>
           <?php }?>
              
   <?php echo "<table border='1'>      
        <tr>
         <td>user name:</td>
         <td>" ?>
         <?php echo $user ?>
         <?php echo " </td>
        </tr>   
       <tr>
        <td>Password :</td>
        <td> " ?>
        <?php echo $pass?>
        <?php echo "</td>
       </tr>   
      <tr>
        <td>Gender :</td>
        <td>" ?><?php echo $gender?>
        <?php echo "</td>
      </tr>  
       <tr>
          <td>Email :</td>
          <td>" ?>
          <?php echo $mail?>
          <?php echo "</td>
        </tr>      
        <tr>
          <td>Phone no :</td>
          <td>" ?>
          <?php echo $phoneCode?>
          <?php echo "</td>
          <td>" ?>
          <?php echo $phone?>
          <?php echo "</td>
        </tr> 
   </table>";?>
           
           
</body>
</html>