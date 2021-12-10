<?php
session_start();
include("tnavbar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Day's Home Rentals</title>
	
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->
	<link href="styles.css" type="text/css" rel="Stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/95dc93da07.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

<body>
	<div id="header-hero-container">               
		<section id="hero">
			<div class="fade"></div>
			<div class="hero-text">
				<h1>THE BEST YOU CAN GET.</h1>
			</div>
		</section>
	</div>



	<section id="properties">
		<div class="container">
			<h2>Properties</h2>
			<div id="properties-slider" class="slick">
				<div>
					<img src="../images/ptwo.jpg" alt="Property 3">
					<div class="property-details">
						<span class="categories">Apartment</span>
						<p class="price">GHC 300</p>
						<span class="beds">6 rooms</span>
						<span class="baths">4 baths</span>
						<span class="lr">Living Room</span>
						<address>
							Dansoman
						</address>
					</div>
				</div>

				<div>
					<img src="../images/pone.jpg" alt="Property 3">
					<div class="property-details">
						<span class="categories">House</span>
						<p class="price">GHC 800</p>
						<span class="beds">6 beds</span>
						<span class="baths">6 baths</span>
						<span class="lr">Living Room</span>
						<address>
							West Legon
						</address>
					</div>
				</div>


			</div>

			<button class="rounded" onclick="document.location='view-properties.php'" >View All Property Listings</button>
		</div>
	</section>





	<section id="services">
		<div class="container">
			<h2>Services</h2>
			<div class="flex">
				<div>
					<div class="fas fa-building"></div>
					<div class="service-list-ico">
						<h3>List a Property</h3>
						<p>Sign Up as a Landlord and list up properties for rent.</p>
					</div>
				</div>

				<div>
					<div class="fas fa-search"></div>
					<div class="service-search-ico">
						<h3>Search for property</h3>
						<p>Sign Up as a tenant and Search for listed properties.</p>
					</div>
				</div>

				<div>
					<div class="fas fa-home"></div>
					<div class="service-book-ico">
						<h3>Book a Place</h3>
						<p>Once logged in as a tenant, you can book and reserve listed Properties</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="contact">
		<div class="container">
			<h2>Contact Us</h2>
			<div class="flex">
				<div id="contactt">
					<lable>Adress</lable>
					<address>
						Ashesi University, 1 University Ave
					</address>

					<label>Phone</label>
					<a href="#">+233 54 353 4340</a>

					<lable>Email Adress</lable>
					<a href="#">mateen.andan@ashesi.edu.gh</a>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="flex container">
			<div class="about-footer">
				<h5>About</h5>
				<p>We provide a service for people who are looking to list up properties and for people who want to rent properties.</p>
			</div>

			<div class="subscribe-footer">
				<h5>Subscribe to Updates</h5>
				<div id="subscribe-container">
					<input type="text" placeholder="Enter Your Email" />
					<button class="rounded">Send</button>
				</div>
			</div>
		</div>
	</footer>
	<script>
		$(function () {
			let headerElem = $('header');
			let logo = $('#logo');
			let navMenu = $('#nav-menu');
			let navToggle = $('#nav-toggle');

			$('#properties-slider').slick({
				slidesToShow: 4,
				slidesToScroll: 1,
				prevArrow: '<a href="#" class="slick-arrow slick-prev">previous</a>',
				nextArrow: '<a href="#" class="slick-arrow slick-next">next</a>',
				responsive: [
				{
					breakpoint: 1100,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true,
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: true,
					}
				},
				{
					breakpoint: 530,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: true,
					}
				}
				]
			});

			$(document).scroll(() => {
				let scrollTop = $(document).scrollTop();

				if (scrollTop > 0) {
					navMenu.addClass('is-sticky');
					logo.css('color', '#000');
					headerElem.css('background', '#fff');
					navToggle.css('border-color', '#000');
					navToggle.find('.strip').css('background-color', '#000');
				} else {
					navMenu.removeClass('is-sticky');
					logo.css('color', '#fff');
					headerElem.css('background', 'transparent');
					navToggle.css('bordre-color', '#fff');
					navToggle.find('.strip').css('background-color', '#fff');
				}

				headerElem.css(scrollTop >= 200 ? {'padding': '0.5rem', 'box-shadow': '0 -4px 10px 1px #999'} : {'padding': '1rem 0', 'box-shadow': 'none' });
			});

			$(document).trigger('scroll');
		});
	</script>		
</body>
</html>