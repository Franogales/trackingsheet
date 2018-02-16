<?php 
   include('connection.php');

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
 ?>
	<tbody>
		
			<tr>
	          <td><a href='tableasist.php?id=<?php echo $row['idEvent']; ?> '><?php echo $name; ?></a></td>
	          <td><?php echo $since; ?></td>
	          <td><?php echo $until; ?></td>
	          <td><?php echo $maxasis ?></td>
	          <td><?php echo $row2['participants']; ?></td>
	          <td><?php echo $date ?></td>
	          <td><a class="btn btn-primary" href='../../php/finishevent.php?id=<?php echo $row['idEvent']; ?> ' onclick="return confirm('sure to finish !'); " >finish</a></td>
	      </tr>
		
        
   </tbody>

<?php } $db->close(); ?>  

