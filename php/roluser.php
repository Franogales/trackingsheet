<?php 
 include('connection.php');
 session_start();
 $ses_sql = mysqli_query($db,"select rol from users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   $rol = $row['rol'];

 ?>