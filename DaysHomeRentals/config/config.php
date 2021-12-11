<?php 

$db = new mysqli('localhost','root','admin','homerents',20.108.172.137);

if($db->connect_error){
	echo "Error connecting database";
}

 ?>
