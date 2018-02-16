<?php
session_start();
   include("connection.php");
   
   
   

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);       
      $sql = "SELECT * FROM users WHERE username = '".$myusername."' and password = '".$mypassword."'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $rol = $row['rol'];
     
      $count = mysqli_num_rows($result);
     
      // If result matched $myusername and $mypassword, table row must be 1 row
	
      if($count == 1) {
      	session_start();
         $_SESSION['login_user'] = $myusername;
         
         if ($rol==1) {         	
        	header("location: ../views/admin/index.php");
         }
         if ($rol ==2) {
         	 header("location: ../views/welcome/index.php");
         }
        
      }else {
       
        die(header("location:index.html?loginFailed=true&reason=password"));
        
      }
?>