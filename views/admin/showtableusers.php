
<?php 
$sql = "SELECT * FROM users";
$result = $db->query($sql); 

  
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

	$iduser = $row['id'];
	$name = $row['name'];
	$username = $row['username'];
	$locked = $row['locked'];
 ?>
</div>
	<tbody>
		<form>
			<tr>
	          <td><a href='../../views/admin/eventsforagent.php?id=<?php echo $iduser; ?> '><?php echo $iduser; ?></a></td>
	          <td><?php echo $name; ?></td>
	          <td><?php echo $username; ?></td>
	          <td><?php echo $locked; ?></td>
	          <td><a class="btn btn-info" href='editusers.php?iduser=<?php echo $iduser; ?> ' >Edit</a></td>
	      </tr>
		</form>
        
   </tbody>

<?php } $db->close(); ?>  


