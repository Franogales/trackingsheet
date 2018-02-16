<?php 
include ('connection.php'); 
session_start();
if (!isset($_GET['id'])) {
	# code...

$id = mysqli_real_escape_string($db, $_POST['iduser']);
$name = mysqli_real_escape_string($db, $_POST['name']);
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$cnfpassword = mysqli_real_escape_string($db, $_POST['cnfpassword']);
$isadmin = mysqli_real_escape_string($db,$_POST['level']);
$islocked = mysqli_real_escape_string($db,$_POST['locked']);

$queryonly = "SELECT username from users where id = $id";
$result3 = $db->query($queryonly);
$row3 = $result3->fetch_array();
$onlyone = $row3['username'];



$queryusernam = "SELECT COUNT(username) as username FROM users where username = '".$username."'";
$result2 = $db->query($queryusernam);
$row2 = $result2->fetch_array();
$existeUsername = $row2['username'];
echo $password;
if ($islocked = 1) {
	$queryblock= "DELETE FROM asist WHERE idUser = $id";
	$db->query($queryblock);
}

if ($password == NULL) {
	$sql = "UPDATE users SET name = '$name', username = '$username',rol = $isadmin, locked = $islocked WHERE id = $id ";
	if ($existeUsername >= 1 and $username != $onlyone) {
				 $_SESSION["error"] = $passwordErr = "<span class='alert alert-danger'>Please chose a diferent username</span>";
				header("location: ../../views/admin/editusers.php?iduser=".$id);
	}elseif ($existeUsername == 1 and $username == $onlyone){
		
		if ($db->query($sql)=== TRUE) {
				$error = "<span class = 'alert alert-success'> UPDATED successfully </span>";
				$_SESSION["succes"] = $error;
			    header("location: ../../views/admin/editusers.php?iduser=".$id); 
			} 
	}
	$db->close();  
}else{
		$sql = "UPDATE users SET name = '$name', username = '$username', password = '$password',rol = $isadmin, locked = $islocked WHERE id = $id ";
		if(($password == $cnfpassword)) {
	    
	    if (strlen($password) < '8') {
	        $_SESSION["error"] = $passwordErr = "<span class='alert alert-danger'>Your Password Must Contain At Least 8 Characters!</span>";
	        header("location: ../../views/admin/editusers.php?iduser=".$id); 
	    }
	    elseif(!preg_match("#[0-9]+#",$password)) {
	        $_SESSION["error"] = $passwordErr = "<span class='alert alert-danger'>Your Password Must Contain At Least 1 Number!</span>";
	        header("location: ../../views/admin/editusers.php?iduser=".$id); 
	    }
	    elseif(!preg_match("#[A-Z]+#",$password)) {
	        $_SESSION["error"] = $passwordErr = "<span class='alert alert-danger'>Your Password Must Contain At Least 1 Capital Letter!</span>";
	       header("location: ../../views/admin/editusers.php?iduser=".$id); 
	    }
	    elseif(!preg_match("#[a-z]+#",$password)) {
	        $_SESSION["error"] = $passwordErr = "<span class='alert alert-danger'>Your Password Must Contain At Least 1 Lowercase Letter!</span>";
	        header("location: ../../views/admin/editusers.php?iduser=".$id); 
	       
	    }elseif ($existeUsername >= 1 and $username != $onlyone) {
					 $_SESSION["error"] = $passwordErr = "<span class='alert alert-danger'>Please chose a diferent username</span>";
					header("location: ../../views/admin/editusers.php?iduser=".$id);
		}elseif ($existeUsername == 1 and $username == $onlyone){
			
			if ($db->query($sql)=== TRUE) {
					$error = "<span class = 'alert alert-success'> UPDATED successfully </span>";
					$_SESSION["succes"] = $error;
				    header("location: ../../views/admin/editusers.php?iduser=".$id); 
				} 
		}  
	  
	} elseif ($password != $cnfpassword) {
	     $_SESSION["error"] = $cnfpasswordErr = "<span class='alert alert-danger'>Please Check You've Entered Or Confirmed Your Password!";
	     header("location: ../../views/admin/editusers.php?iduser=".$id); 
	     
	}
}



 
 
 



$db->close();

}else{
	$id = mysqli_real_escape_string($db, $_GET['id']);
	$sql = "DELETE FROM users WHERE id = $id";
	$sql2 = "DELETE FROM asist WHERE idUser = $id";
	if ($db->query($sql)=== TRUE and $db->query($sql2)) {
				$error = "<span class = 'alert alert-success'> DELTED successfully </span>";
				$_SESSION["succes"] = $error;
			    header("location: ../../views/admin/editusers.php"); 
			}
		$db->close();
}


 ?>
