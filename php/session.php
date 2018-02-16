<?php
   include('connection.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select * from users where username = '".$user_check."'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   $rol = $row['rol'];
   $id = $row['id'];
   $islocked = $row['locked'];
   $_SESSION['islocked'] = $islocked;
   $_SESSION['user_id'] = $id;
   $_SESSION['user_level'] = $rol;
   if(!isset($_SESSION['login_user'])){
      header("location: ../../index.php");
      exit();
   }
?>