<?php 
include ('connection.php'); 
session_start();
$name = mysqli_real_escape_string($db, $_POST['name']);
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$cnfpassword = mysqli_real_escape_string($db, $_POST['cnfpassword']);
$isadmin = mysqli_real_escape_string($db,$_POST['level']);

$queryusernam = "SELECT COUNT(username) as username FROM users where username = '".$username."'";
$result2 = $db->query($queryusernam);
$row2 = $result2->fetch_array();
$existeUsername = $row2['username'];

$sql = "INSERT INTO users (name, username, password,rol) VALUES ('$name', '$username','$password',$isadmin)";

 
 
 
if(($password == $cnfpassword)) {
    
    if (strlen($password) < '8') {
        $_SESSION["error"] = $passwordErr = "<span class='alert alert-danger'>Your Password Must Contain At Least 8 Characters!</span>";
        header("location: ../../views/admin/index.php");
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
        $_SESSION["error"] = $passwordErr = "<span class='alert alert-danger'>Your Password Must Contain At Least 1 Number!</span>";
        header("location: ../../views/admin/index.php");
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $_SESSION["error"] = $passwordErr = "<span class='alert alert-danger'>Your Password Must Contain At Least 1 Capital Letter!</span>";
       header("location: ../../views/admin/index.php");
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        $_SESSION["error"] = $passwordErr = "<span class='alert alert-danger'>Your Password Must Contain At Least 1 Lowercase Letter!</span>";
        header("location: ../../views/admin/index.php"); 
       
    }elseif ($existeUsername == 1) {
		$_SESSION["error"] = $passwordErr = "<span class='alert alert-danger'>Please chose a diferent username</span>";
		header("location: ../../views/admin/index.php"); 
	}elseif ($db->query($sql)=== TRUE) {
				$error = "<span class = 'alert alert-success'> registered successfully </span>";
				$_SESSION["succes"] = $error;
			    header("location: ../../views/admin/index.php"); 
			}    
  
} elseif ($password != $cnfpassword) {
     $_SESSION["error"] = $cnfpasswordErr = "<span class='alert alert-danger'>Please Check You've Entered Or Confirmed Your Password!";
     header("location: ../../views/admin/index.php"); 
     
}





    	
    	
    




$db->close();


 ?>