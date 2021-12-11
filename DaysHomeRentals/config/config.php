<?php 

$db = new mysqli('localhost','root','admin','homerents');

if($db->connect_error){
	echo "Error connecting database";
}

 ?>
