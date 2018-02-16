<?php 
include('connection.php');
include ('session.php');


$idEvent = mysqli_real_escape_string($db,$_GET['id']);
$sql = "UPDATE events SET finished = 1 WHERE idEvent = $idEvent";

if ($db->query($sql)=== TRUE) {
	$error = "<span class = 'alert alert-success'> finished successfully </span>";
	$_SESSION["succes"] = $error;
    header("location: ../../views/admin/index.php"); 
}else{
	$error = "<span class='alert alert-danger'> Error: " . $sql . " ->" . $conn->error . "unable to finish </span>";
    $_SESSION["error"] = $error;
    header("location: ../../views/admin/index.php"); 
}
	

$db->close();
?>