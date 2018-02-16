<?php 
   include('connection.php');
   $idEvent = mysqli_real_escape_string($db,$_GET['id']);

$query = "SELECT a.id as id, a.name as name, a.username as username, c.name as event FROM users AS a INNER JOIN asist AS b ON b.idUser = a.id INNER JOIN events as c ON b.idEvent = c.idEvent WHERE b.idEvent = $idEvent ";


$i = 0;

$result = $db->query($query);  
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
$i++;
	$iduser = $row['id'];
	$name = $row['name'];
	$username = $row['username'];
	$eventname = $row['event'];
 ?>
	<tbody>
		<form>
			<tr>
	          <td><a href='eventsforagent.php?id=<?php echo $iduser; ?> '><?php echo $i; ?></a></td>
	          <td><?php echo $name; ?></td>
	          <td><?php echo $username; ?></td>
	          <td><?php echo $eventname; ?></td>
	          
	          <td><a class="btn btn-danger" href='../../php/deleteasist.php?id=<?php echo $iduser; ?>&idEvent=<?php echo $idEvent; ?> ' onclick="return confirm('sure to delete !'); " >Delete</a></td>
	      </tr>
		</form>
        
   </tbody>

<?php } $db->close(); ?>  





