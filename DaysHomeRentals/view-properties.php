<?php  
session_start();
// if(!isset($_SESSION["email"])){
//   header("location:view-properties.php");
// }
include('navbar.php');
?>
<link href="styles.css" type="text/css" rel="Stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/95dc93da07.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<br>
<body>
	<section id="properties">
		<div class="container">
			<h2>Properties</h2>
			<div id="properties-slider" class="slick">

				<div>
					<img src="images/ptwo.jpg" alt="Property 1">
					<div class="property-details">
						<span class="categories">Apartment</span>
						<p class="price">GHC 300</p>
						<span class="beds">6 rooms</span>
						<span class="baths">4 baths</span>
						<span class="lr">Living Room</span>
						<address>
							Dansoman
						</address>
						<button class="rounded" onclick="document.location='view-properties.php'" >Book Property</button>
					</div>
				</div>

				<div>
					<img src="images/pone.jpg" alt="Property 1">
					<div class="property-details">
						<span class="categories">House</span>
						<p class="price">GHC 800</p>
						<span class="beds">6 beds</span>
						<span class="baths">6 baths</span>
						<span class="lr">Living Room</span>
						<address>
							West Legon
						</address>
						<button class="rounded" onclick="document.location='view-properties.php'" >Book Property</button>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

<script>
	$(function () {
		let headerElem = $('header');
		let logo = $('#logo');
		let navMenu = $('#nav-menu');
		let navToggle = $('#nav-toggle');

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
				logo.css('color', '#000');
				headerElem.css('background', 'transparent');
				navToggle.css('bordre-color', '#fff');
				navToggle.find('.strip').css('background-color', '#fff');
			}

			headerElem.css(scrollTop >= 200 ? {'padding': '0.5rem', 'box-shadow': '0 -4px 10px 1px #999'} : {'padding': '1rem 0', 'box-shadow': 'none' });
		});

		$(document).trigger('scroll');
	});
</script>		