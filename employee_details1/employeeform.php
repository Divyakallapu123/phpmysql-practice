
<?php
   
   $empname = $_POST["empname"];
   $email = $_POST["email"];
   $phone = $_POST["phone"];
   $address = $_POST["address"];
   $username = $_POST["username"];
   $password = $_POST["password"];
  
   echo "<table border='1'>      
        <tr>
         <td>name:</td>
         <td>" ?>
         <?php echo $empname ?>
         <?php echo " </td>
        </tr>   
       <tr>
        <td>email :</td>
        <td> " ?>
        <?php echo $email?>
        <?php echo "</td>
       </tr>   
      <tr>
        <td>phone :</td>
        <td>" ?><?php echo $phone?>
        <?php echo "</td>
      </tr>  
       <tr>
          <td>address:</td>
          <td>" ?>
          <?php echo $address?>
          <?php echo "</td>
        </tr>      
        <tr>
          <td>username:</td>
          <td>" ?>
          <?php echo $username?>
          <?php echo "</td>
        </tr> 
   </table>";

?>
