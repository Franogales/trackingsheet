<?php
   include('../../php/session.php');
    if(!isset($_SESSION['user_level']) || $_SESSION['user_level'] != 2){
      header("location: ../../index.php");
      exit();
   }
?>

<h1>Welcome agente <?php echo $login_session; ?></h1> 
      <h2><a href = "../../php/logout.php">Sign Out</a></h2>

      <span class='alert alert-danger'> Error: you can not be registered because you already have this busy schedule </span>
      $sql = "INSERT INTO asist (idEvent, idUser) VALUES ($idEvent, $idUser)";

      if ($db->query($sql)=== TRUE) {
				$error = "<span class = 'alert alert-success'> registered successfully </span>";
				$_SESSION["succes"] = $error;
			    header("location: ../../views/welcome/index.php"); 
			}




			$queryusernam = "SELECT COUNT(username) as username FROM users where username = '".$username."'";
$result = $db->query($queryusernam);
$row = $result->fetch_array();
$existeUsername = $row['username'];
if ($existeUsername == 1) {
	echo "Selecciona un username diferente, ";
}