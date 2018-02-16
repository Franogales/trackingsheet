<?php
session_start();
include ('connection.php'); 
$name = mysqli_real_escape_string($db,$_POST['eventname']);
$since = mysqli_real_escape_string($db,$_POST['since']);
$until = mysqli_real_escape_string($db,$_POST['until']);
$howmany = mysqli_real_escape_string($db,$_POST['howmany']);
$date = mysqli_real_escape_string($db,$_POST['date']);


$sql = "INSERT INTO events (name,since,until,maxAsis,date,finished) VALUES ('$name','$since','$until',$howmany,'$date',0) ";
if ($db->query($sql)=== TRUE) {
	$error = "<span class = 'alert alert-success'> Event created successfully </span>";
	$_SESSION["succes"] = $error;
    header("location: ../../views/admin/index.php"); 
}else{
	$error = "<span class='alert alert-danger'> Error: " . $sql . " ->" . $conn->error . "unable to create events </span>";
    $_SESSION["error"] = $error;
    header("location: ../../views/admin/index.php"); 
}
	

$db->close();


 ?>