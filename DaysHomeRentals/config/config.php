<?php 

$db = new mysqli('localhost','root','','homerents',3307);

if($db->connect_error){
	echo "Error connecting database";
}

 ?>