<?php 
session_destroy();
include("php/connection.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {  
	$myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);       
      $sql = "SELECT * FROM users WHERE username = '".$myusername."' and password = '".$mypassword."'";
      $result = $db->query($sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $rol = $row['rol'];
     
      $count = mysqli_num_rows($result);
     
      // If result matched $myusername and $mypassword, table row must be 1 row
	
      if($count == 1) {
      	   
         if ($rol==1) {      
         	session_start();
         	$_SESSION['login_user'] = $myusername;   	
        	header("location: views/admin/index.php");

         }
         if ($rol ==2) {
         	session_start();
         	$_SESSION['login_user'] = $myusername; 
         	header("location: views/welcome/index.php");
         }
        
      }else {
        $error = "Your Login Name or Password is invalid";
      }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="public/css/login.css">
	<style type="text/css">
	.icon {
	  display: inline-block;
	  fill: var(--iconFill);
	  font-size: 1rem;
	  height: 1em;
	  vertical-align: middle;
	  width: 1em;
	}
		.content {
                text-align: center;

            } 
	</style>
	<title>Tracking</title>
</head>
<body>
	<div style="margin-top: 5%"></div>
	<div class="container">
		<div class="flex-center form-wrapper position-ref full-height">
			
			<div class="text-center panel"   >
				<div class="title">
					<img src="public/images/listentrust_logo.png">
				</div>
				<?php
					$alert = "alert alert-danger";
				 if ($error) {
					echo "<div class= '".$alert."'>
				  <strong>".$error." </strong> 
				</div>";
				} ?>
				
	    		<div class="grid">	

					<form action="" method="POST" class="form login  ">
						<div class="">
					        <div class="form__field">
					         <label for="login__username"><i class="fa fa-user" style="font-size:20px"></i></label>
					          <input id="login__username" type="text" name="username" class="form__input" placeholder="Username"  >
					        </div>
					        <div class="form__field ">
					          <label for="login__username"><i class="fa fa-lock" style="font-size:20px"></i></label>
					          <input id="login_password" type="password" name="password" class="form__input" placeholder="Password">
					        </div>
							
					        <div class="form__field">
					          <input type="submit" value="Sign In">
					        </div>
				        </div>
	      			</form>

	      		</div>
	      	</div>
		</div>
	</div>
<script type="text/javascript">
	
</script>
</body>
</html>