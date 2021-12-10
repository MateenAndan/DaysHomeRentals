<?php
$page = "";
if(isset($_GET["page"]) && $_GET["page"] != "") {
	$page = $_GET["page"];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Day's Home Rentals</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link href="../styles.css" type="text/css" rel="Stylesheet" />
</head>

<body>
	<div id="header-hero-container">
		<header>
			<div class="flex container">
				<!-- <a href="#" class="navbar-brand">
					<img src="images/logoo.png" height="60"  alt="Day's Home Rental">
				</a> -->
				<a id = "logo" href='thomepage.php'>Day's Home Rentals</a>
				<nav>
					<ul id="nav-menu">
						<li ><a href="thomepage.php" class = "active">Home</a></li>
						<li><a href="view-properties.php">Properties</a></li>
						<li><a href="#services">Services</a></li>
						<li><a href="#contact">Contact Us</a></li>
						<?php
						if(isset($_SESSION["email"]) && !empty($_SESSION['email'])){
							?>
							<div class = "dropdown">
								<button class = "dropbtn"> Profile
									<i class="fa fa-caret-down"></i>
								</button>
								<div class=" dropdown-content">
									<a href="tenant-profile.php">My Profile</a>
									<a href="book.php">Book Property</a>
									<a href="../logout.php">Log Out</a>
								</div>
							</div>
						<?php
					} 
					else {
						?>
						<li><a href="../register.php" > Register</a></li>
						<li><a href="../login.php"> Login</a></li>
						<?php
					} ?>
					<li id="close-flyout"><span class="fas fa-times"></span></li>
				</ul>
			</nav>
		</div>
	</header>
</body>
</html>

<style>
	.dropdown{
		float: right;
		overflow: hidden;
	}

	.dropdown .dropbtn{
		font-size: 16px;
		border: none;
		outline: none;
		color: grey;
		background-color: inherit;
	}

	.navbar a:hover, .dropdown:hover .dropbtn, .dropdown.active {
		color: blue;
	}

	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}

	.dropdown-content a {
		float: none;
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
		text-align: left;
	}

	.dropdown-content a:hover {
		background-color: #ddd;
	}

	.dropdown:hover .dropdown-content {
		display: block;
	}

</style>