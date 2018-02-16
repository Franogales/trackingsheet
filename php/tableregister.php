<?php 
include('connection.php');
include ('session.php');
$idUser = $_SESSION['user_id'];
if ($_SESSION['islocked'] == 1) {
	
	$error=  "<span class='alert alert-danger '> you are blocked</span><span class='alert alert-danger '> you are blocked</span><span class='alert alert-danger '> you are blocked</span><span class='alert alert-danger '> you are blocked</span><span class='alert alert-danger '> you are blocked</span><span class='alert alert-danger '> you are blocked</span>";
	echo $error;
}else{


//here start 

$sql = "SELECT * FROM events WHERE finished = 0 ORDER BY date";

$result = $db->query($sql);  
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	$id = $row['idEvent'];
	$name = $row['name'];
	$since = $row['since'];
	$until = $row['until'];
	$date = $row['date'];
	$maxasis = $row['maxAsis'];
	$sql2 = "SELECT COUNT(idAsist) AS participants FROM asist WHERE idEvent = $id";
	$result2 = $db->query($sql2);
	$row2 = $result2->fetch_assoc();
	$sql3 = "SELECT COUNT(idAsist) AS registered FROM asist WHERE idUser = $idUser and idEvent =$id";
	
	$result3 = $db->query($sql3);
	$row3 = $result3->fetch_assoc();
	$registered = $row3['registered'];
	
 ?>
	<tbody>
			<tr>
	         	<td><?php echo $name; ?></td>
	         	<td><?php echo $since; ?></td>
	         	<td><?php echo $until; ?></td>
	         	<td><?php echo $maxasis ?></td>
	          	<td><?php echo $row2['participants']; ?></td>
	          	<td><?php echo $date ?></td>
	          	
	          	<?php if ($registered ==0 && $row2['participants'] < $maxasis ) {?>
	          	<td><a class="btn btn-primary" href='../../php/registerasist.php?id=<?php echo $row['idEvent']; ?> ' onclick="return confirm('sure to register !'); " >register</a></td>
	          	
	         	<?php }elseif ($registered ==1){ ?> 
	         	<td ><a class="btn btn-success disabled">registered</a> </td>
	       		<?php  }elseif ($row2['participants'] >= $maxasis){ ?> 
	       		<td ><a class="btn btn-danger disabled">unavailable</a> </td>
	       		<?php } ?>  
	        </tr>      
   </tbody>

<?php } $db->close(); 
}
?>  


 