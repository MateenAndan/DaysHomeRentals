<?php
include("../config/config.php");

if(isset($_POST['landlord_signup'])){
	landlord_signup();
}

if(isset($_POST['landlord_login'])){
	landlord_login();
}
if(isset($_POST['landlord_update'])){
	landlord_update();
}

function landlord_signup(){
	global $Landlord_id,$pname,$gender,$email,$password,$contact,$errors,$db;
	$Landlord_id = ($_POST['Landlord_id']);
	$pname = ($_POST['pname']);
	$gender = ($_POST['gender']);
	$email = ($_POST['email']);
	$password = ($_POST['password']);
	$password = md5($password);
	$contact = ($_POST['contact']);
	$sql = "INSERT INTO landlord(Landlord_id,pname,gender,email,password,contact) VALUES ('$Landlord_id','$pname','$gender','$email','$password','$contact')";
	if ($db->query($sql)===TRUE) {
		header("location:landlord-login.php");
	}

	// $Lsql = "INSERT INTO Landlord(Landlord_id,pid,nationality) VALUES ('$Landlord_id','$pid')";
	// if ($db->query($Lsql)===TRUE) {
	// 	header("location:landlord-login.php");
	// }
}

function landlord_login(){
	global $email,$db;
	$email = ($_POST['email']);
	$password =  ($_POST['password']);
	$password = md5($password);
	$sql = "SELECT * FROM Landlord where email = '$email' AND password = '$password' LIMIT 1";
	$result = $db->query($sql);
	if ($result->num_rows==1) {
		$data = $result -> fetch_assoc();
		$loggedIn = $data['email'];
		session_start();
		$_SESSION['email'] = $email;
		header('location:lhomepage.php');
	}

}

function landlord_update(){
	global $Landlord_id,$pname,$gender,$email,$password,$contact,$errors,$db;
	// $Landlord_id = ($_POST['Landlord_id']);
	$pname = ($_POST['pname']);
	$email = ($_POST['email']);
	$password = md5($password);
	$contact = ($_POST['contact']);
	$sql = "UPDATE Landlord SET pname='$pname',email='$email',contact='$contact' WHERE Landlord_id='$Landlord_id'";
	$query=mysqli_query($db,$sql);
	if($db->query($sql)===TRUE){
 ?>

		<style>
		.alert {
		  padding: 20px;
		  background-color: lightgreen;
		  color: black;
		}

		.closebtn {
		  margin-left: 15px;
		  color: white;
		  font-weight: bold;
		  float: right;
		  font-size: 22px;
		  line-height: 20px;
		  cursor: pointer;
		  transition: 0.3s;
		}

		.closebtn:hover {
		  color: black;
		}
		</style>
		<script>
			window.setTimeout(function() {
		    $(".alert").fadeTo(1000, 0).slideUp(500, function(){
		        $(this).remove(); 
		    });
		}, 2000);
		</script>
		<div class="container">
		<div class="alert" role='alert'>
		  <span class="closebtn" onclick="document.location='landlord-profile.php'";>&times;</span> 
		  <center><strong>Your Information has been updated.</strong></center>
		</div></div>


		<?php
	}
}
	function ($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>