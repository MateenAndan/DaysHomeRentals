<?php
include("../config/config.php");
if(isset($_POST['reservation'])){
	reservation();
}

function reservation(){
	global $PropertyId,$Tenant_id,$date_in, $date_out,$db;

	$PropertyId = ($_POST['PropertyId']);
	$Tenant_id = ($_POST['Tenant_id']);
	$date_in = ($_POST['date_in']);
	$date_out = ($_POST['date_in']);
	session_start();
	$u_email = $_SESSION['email'];
	$sql_email = "SELECT * FROM tenant WHERE email ='$u_email'";
	$result = mysqli_query($db,$sql_email);

	if (mysqli_num_rows($result)>0) {
		while ($rows = mysqli_fetch_assoc($result)) {
			$Tenant_id = $rows['Tenant_id'];
		}
	}

	$sql = "INSERT INTO tenant(PropertyId,Tenant_id,date_in,date_out) VALUES (PropertyId,$Tenant_id,'$date_in','$date_out')";
	$query=mysqli_query($db,$sql);
	header('location:book-confirm.php');
}
?>



<?php
function ($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>