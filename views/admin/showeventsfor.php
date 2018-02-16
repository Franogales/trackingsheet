<?php 
   include('connection.php');
   $idUser = mysqli_real_escape_string($db,$_GET['id']);

$query = "SELECT a.id as id, a.name as name, a.username as username, c.name as event, c.idEvent as idevent, c.since as start, c.until as finish, c.date as date FROM users AS a INNER JOIN asist AS b ON b.idUser = a.id INNER JOIN events as c ON b.idEvent = c.idEvent WHERE b.idUser = $idUser and c.finished = 0";


$i = 0;

$result = $db->query($query);  
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
$i++;
	$iduser = $row['id'];
	$name = $row['name'];
	$username = $row['username'];
	$eventname = $row['event'];
	$start = $row['start'];
	$finish = $row['finish'];
	$date = $row['date'];
	$idevent = $row['idevent'];

 ?>
	<tbody>
		<form>
			<tr>
	          <td><a href='editusers.php?iduser=<?php echo $iduser; ?> '><?php echo $iduser; ?></a></td>
	          <td><?php echo $name; ?></td>
	          <td><?php echo $username; ?></td>
	          <td><?php echo $eventname; ?></td>
	          <td><?php echo $start; ?></td>
	          <td><?php echo $finish; ?></td>
	          <td><?php echo $date; ?></td>
	          
	          <td><a class="btn btn-danger" href='../../php/deleteasistfor.php?id=<?php echo $iduser; ?>&idEvent=<?php echo $idevent; ?> ' onclick="return confirm('sure to delete !'); " >Delete</a></td>
	      </tr>
		</form>
        
   </tbody>

<?php } $db->close(); ?>  



