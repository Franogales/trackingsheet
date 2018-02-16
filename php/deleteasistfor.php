<?php 
include('connection.php');
$iduser = mysqli_real_escape_string($db,$_GET['id']);
$idevent = mysqli_real_escape_string($db,$_GET['idEvent']);



$sql = "DELETE FROM asist WHERE idUser = $iduser and idEvent = $idevent" ;
if ($db->query($sql) === TRUE) {
	$error = "<span class = 'alert alert-success'> DELETED successfully </span>";
	$_SESSION["succes"] = $error;
    header("location: ../../views/admin/eventsforagent.php?id=".$iduser);
}else{
	echo "error no se pudo borrar";
}

 ?>