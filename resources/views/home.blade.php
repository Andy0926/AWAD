@extends('layout')

@section('content')
	<!-- Navigation -->


	<!--- Image Slider -->
	<div id="slides" class="carousel slide mb-5" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
		</ul>

		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/cons1.jpg">
				<div class="carousel-caption custom-position1">
					<div class="shadow-white">
					</div>
				</div>
				<div class="carousel-caption text-color custom-position1">
					<h1 class="display-2">Upicon</h1>
					<h3>We Build a Better Tomorrow</h3>
					<button type="button" class="btn btn-outline-light btn-lg">Register</button>
					<button type="button" class="btn btn-success btn-lg">View Projects</button>
				</div>

			</div>
			<div class="carousel-item">
				<img src="img/construction2.jpg">
				<div class="carousel-caption text-color custom-position2">
					<h1 class="display-4">We Established in 1997</h1>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/home-slider.jpeg">
				<div class="carousel-caption text-color custom-position2">
					<h1 class="display-4">We are Property Development Country</h1>
				</div>
			</div>
		</div>
	</div>


	<!--- Welcome Section -->

	<div class="container padding mb-5 ml-6 mr-6">
		<div class="row welcome text-center ">
			<div class="col-12">
				<h1 class="display-4">Upicon Group</h1>
			</div>
			<hr>
			<div class="col-12">
				<p class="lead">UPICON SDN BHD’s corporate history dates back to the 29th of May 1997, when the three
					entrepreneurs and founders of the group, Dato’ Chai Ming Foo, Datin Low Tan Yu and Datin Seow An Nee
					joined forces to start Upicon Sdn. Bhd.We are Malaysia-based and although the company is new in
					property development but all the directors are experienced in property development and construction
					firm for several years</p>
			</div>
		</div>
	</div>

	<!--- Three Column Section -->
	<div class="container mb-0 ml-6 mr-6">
		<div class="people row text-center padding">
			<div class=" col-xs-12 col-sm-6 col-md-4">
				<img src="img/char1.png">
				<h3>Managing Director</h3>
				<p>Dato' Louis Chai Ming Foo</p>
			</div>
			<div class=" col-xs-12 col-sm-6 col-md-4">
				<img src="img/char1.png">
				<h3>Executive Director</h3>
				<p>Datin Seow An Nee</p>
			</div>
			<div class=" col-sm-12 col-md-4">
				<img src="img/char1.png">
				<h3>Executive Director</h3>
				<p>Mr. Ong Poh Huat</p>
			</div>
			
		</div>
		<hr class="mb-0">
	</div>

	<!--- Two Column Section -->

	<div class="container display-green text-white mt-5 mb-5 ml-6 mr-6">
		<div class="row philosophy">
			<h2 class="mt-3 ">Our Philosophy</h2>
			<p>Our development concepts are showcases of contemporary lifestyle. Our philosophy is to create a
				harmonious and green living lifestyle. We provide a safe living environment with gated and guarded
				security facility which makes coming home a safe haven to look forward to. We aim to be a world class
				developer that will leave an enduring legacy of innovation and excellence. We remain committed to our
				corporate philosophy of maximising shareholders’ value by delivering quality homes, health products and
				excellent services to our customers. </p>

		</div>
		<hr class="my-4">
	</div>


	<!--- Connect -->
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-12">
				<h2>Connect</h2>
			</div>
			<div class="col-12 social padding">
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-linkedin-in"> </i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
			</div>
		</div>
	</div>

	<!--- Footer -->
	<footer>
		<div class="container-fluid padding">
			<div class="row text-center">
				<div class="col-md-4 footer-section">
					<img class="footer-logo" src="img/logo2.png">
					<hr class="light">
					<p>(+603) 3323 5120, (+603) 3319 2120</p>
					<p>upicongroup@upicon.my</p>

				</div>
				<div class="col-md-4 footer-section">
					<hr class="light">
					<p>Operating Hour</p>
					<hr class="light">
					<p>Weekday: 9.00am - 5.00pm</p>
					<p>Saturday: 9.00am - 1.00pm</p>
					<p>Sunday: Close</p>
				</div>
				<div class="col-md-4 footer-section">
					<hr class="light">
					<p>Location</p>
					<hr class="light">
					<p>WISMA UPICON No. 34, 34-1 & 34-2, Jalan Jasmin 6/KS6, Bandar Botanic, 41200 Klang, Selangor,
						Malaysia</p>
				</div>
				<div class="col-12 footer-section">
					<hr class="light">
					<h6>&copy; Upicon.my | 2013 - 2020 | Website Developed by Tech Star</h6>
				</div>
			</div>
		</div>
	</footer>

	@endsection