<?php
$servername = "localhost";
$username = "root";
$password = "MZROCLA";
$db='tracking';

// Create connection
$db = new mysqli($servername, $username, $password,$db);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

?>