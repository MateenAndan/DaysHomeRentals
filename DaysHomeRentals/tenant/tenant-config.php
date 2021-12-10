<?php
include("../config/config.php");

if(isset($_POST['tenant_signup'])){
	tenant_signup();
}

if(isset($_POST['tenant_login'])){
	tenant_login();
}

function tenant_signup(){
	global $Tenant_id,$pname,$gender,$email,$contact,$password,$nationality,$errors,$db;
	// $Tenant_id = validate($_POST['Tenant_id']);
	$pname = ($_POST['pname']);
	$gender = ($_POST['gender']);
	$email = ($_POST['email']);
	$contact = ($_POST['contact']);
	$password = ($_POST['password']);
	$nationality = ($_POST['nationality']);
	$password = md5($password);
	$sql = "INSERT INTO tenant(pname,gender,email,password,contact,nationality) VALUES ('$pname','$gender','$email','$password','$contact','$nationality')";
	if ($db->query($sql)===TRUE) {
		header("location:tenant-login.php");
	}
}

function tenant_login(){
	global $email,$db;
	$email = ($_POST['email']);
	$password =  ($_POST['password']);
	$password = md5($password);
	$sql = "SELECT * FROM tenant where email = '$email' AND password = '$password' LIMIT 1";
	$result = $db->query($sql);
	if ($result->num_rows==1) {
		$data = $result -> fetch_assoc();
		$loggedIn = $data['email'];
		session_start();
		$_SESSION['email'] = $email;
		header('location:thomepage.php');
	}
	else{

 ?>
	<style>
	.alert {
	  padding: 20px;
	  background-color: #DC143C;
	  color: white;
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
	<br>
	<br>
	<br>
	<div class="container">
		<div class="alert">
	  		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
	  		<strong>Incorrect Email/Password or not registered.</strong> Click here to <a href="tenant-signup.php" style="color: lightblue;"><b>Register</b></a>.
		</div>
	</div>



	<?php
		}

}

function tenant_update(){
	global $Tenant_id,$pname,$gender,$email,$contact,$password,$nationality,$errors,$db;
	$pname = ($_POST['pname']);
	$gender = ($_POST['gender']);
	$email = ($_POST['email']);
	$contact = ($_POST['contact']);
	$password = ($_POST['password']);
	$nationality = ($_POST['nationality']);
	$password = md5($password);
	$sql = "UPDATE tenant SET pname='$pname', gender = '$gender',email='$email',contact='$contact' WHERE Tenant_id='$Tenant_id'";
	$query=mysqli_query($db,$sql);
	if(!empty($query)){
		?>


<?php
	}
}
function ($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	}
?>