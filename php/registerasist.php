<?php 
include('connection.php');
include ('session.php');
if ($_SESSION['islocked'] == 1) {
	session_start();
	$error=  "<span class='alert alert-danger '> you are blocked</span>";
	$_SESSION['error'] = $error;
}else{

$idUser = mysqli_real_escape_string($db,$_SESSION['user_id']);
$idEvent = mysqli_real_escape_string($db,$_GET['id']);


$sql2 = "SELECT since, until, date, maxAsis from events where idEvent = $idEvent";
$result = $db->query($sql2);
$row = $result->fetch_assoc();
$since = $row['since'];
$until = $row['until'];
$date = $row['date'];
$maxasist = $row['maxAsis'];


	$sql3 = "SELECT COUNT(idAsist) AS participants FROM asist WHERE idEvent = $idEvent";
	$result3 = $db->query($sql3);
	$row3 = $result3->fetch_assoc();
	$participantes = $row3['participants'];

	




$sqlcount = "SELECT COUNT(*) as contado FROM asist AS a INNER JOIN events AS b ON a.idEvent = b.idEvent WHERE  b.since >= '".$since."' and b.until <='".$until."' and b.date = '".$date."' and a.idUser = $idUser";

 
 $result2 = $db->query($sqlcount);
 $row2 = $result2->fetch_assoc();
      	$count = $row2['contado'];
		if ($participantes>= $maxasist) {
			$error = "<span class='alert alert-danger'> Error: FAILED -> There are not more spaces </span>";
			    $_SESSION["error"] = $error;
			    
			   header("location: ../../views/welcome/index.php");
	}elseif ($count == 0) {
			
	      	$sql = "INSERT INTO asist (idEvent, idUser) VALUES ($idEvent, $idUser)";
	      	if ($db->query($sql)=== TRUE) {
				$error = "<span class = 'alert alert-success'> registered successfully </span>";
				$_SESSION["succes"] = $error;
			    header("location: ../../views/welcome/index.php"); 
			}
		}else{
				
				$error = "<span class='alert alert-danger'> Error: you can not be registered because you already have this busy schedule </span>";
			    $_SESSION["error"] = $error;
			    header("location: ../../views/welcome/index.php");
			}
     


	

$db->close();
}
?>

