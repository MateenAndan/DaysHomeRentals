<?php 
require __DIR__ . "/dbCredentials.php";
$db = new mysqli(servername, username, password, dbname);
if($db->connect_error){
	echo "Error connecting database";
}

else {
	echo "Connection Sucessful";
}

 ?>
