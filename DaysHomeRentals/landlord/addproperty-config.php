<?php
include("../config/config.php");
if(isset($_POST['addProperty'])){
	addProperty();
}

if (isset($_POST['property_delete'])) {
	property_delete();
}

function property_delete(){
	$PropertyId = ($_POST['PropertyId']);
	$sql = "DELETE FROM addProperty WHERE PropertyId = '$PropertyId'";
	if($db->query($sql) ===TRUE){
		echo "Deleted";
	}
	else {
		echo "Could not Delete";
	}

}

function addProperty(){
	global $Landlord_id,$location, $category, $houseNo, $rooms, $kitchen, $lroom, $bathrooms,$pdescription,$price,$db;

	$PropertyId = ($_POST['PropertyId']);
	$Landlord_id = ($_POST['Landlord_id']);
	$location = ($_POST['location']);
	$category = ($_POST['category']);
	$houseNo = ($_POST['houseNo']);
	$rooms = ($_POST['rooms']);
	$kitchen = ($_POST['kitchen']);
	$lroom = ($_POST['lroom']);
	$bathrooms = ($_POST['bathrooms']);
	$pdescription = ($_POST['pdescription']);
	$price = ($_POST['price']);
	session_start();
	$u_email = $_SESSION['email'];
	$sql_email = "SELECT * FROM Landlord WHERE email ='$u_email'";
	$result = mysqli_query($db,$sql_email);

	if (mysqli_num_rows($result)>0) {
		while ($rows = mysqli_fetch_assoc($result)) {
			$Landlord_id = $rows['Landlord_id'];
		}
	}

	$sql = "INSERT INTO addProperty(Landlord_id,location,category,houseNo,rooms,kitchen,lroom,bathrooms,pdescription,price) VALUES ($Landlord_id,'$location','$category','$houseNo','$rooms','$kitchen','$lroom','$bathrooms','$pdescription','$price')";
	$query=mysqli_query($db,$sql);
	header('location:confirm.php');
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