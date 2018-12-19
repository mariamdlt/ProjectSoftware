<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>HOTEL WEB SITE </title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	.carousel-inner > .item > img,
	.carousel-inner > .item > a > img {
		width: 80%;
		margin: auto;
	}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<link rel="shortcut icon" href="images/favicon.png" />
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

	<!--//fonts-->
</head>
<body style="background-color:rgba(208, 231, 27, 0.65);">
	<!-- header -->
	<div class="banner-top">
		<div class="social-bnr-agileits">
			<ul class="social-icons3">
				<li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
				<li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
				<li><a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a></li>
			</ul>
		</div>
		<div class="contact-bnr-w3-agile">
			<ul>

				<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:hotelwebsite@hotmail.com">hotelwebsite@hotmail.com</a></li>
				<li><i class="fa fa-phone" aria-hidden="true"></i>+593 6532455</li>

			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<a class="navbar-brand" href="http://127.0.0.1:8080/hotel_admin/"> HOTELSITE <span>WEB</span><p class="logo_w3l_agile_caption">Tu sitio de descanso</p></a>
				</div>

				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">

						<ul class="nav navbar-nav menu__list">

							<li class="menu__item"><a href="cliente/start.php" class="menu__link scroll">Inicio</a></li>
							<li class="menu__item"><a href="cliente/about.php" class="menu__link scroll">Nosotros</a></li>
							<li class="menu__item"><a href="cliente/reserva.php" class="menu__link scroll">Reserva de Habitaciones</a></li>
							<li class="menu__item"><a href="" class="menu__link scroll">Contáctenos</a></li>
							<li class="menu__item"><a href="admin/index.php" class="menu__link scroll">Administrar Hotel</a></li>


						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>


		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="images/fr8.jpg" alt="Chania" style="width:71%;">
				<div class="carousel-caption">
					<h3>Los Angeles</h3>
					<p>LA is always so much fun!</p>
				</div>
			</div>

			<div class="item">
				<img src="images/fr9.jpg" alt="Chicago" style="width:84%;">
				<div class="carousel-caption">
					<h3>Chicago</h3>
					<p>Thank you, Chicago!</p>
				</div>
			</div>

			<div class="item">
				<img src="images/3.jpg" alt="New York">
				<div class="carousel-caption">
					<h3>New York</h3>
					<p>We love the Big Apple!</p>
				</div>
			</div>


			<div class="item">
				<img src="images/cuarto3.jpg" alt="New York" style="width:89%;">
				<div class="carousel-caption">
					<h3>New York</h3>
					<p>We love the Big Apple!</p>
				</div>
			</div>

			<div class="item">
				<img src="images/fr11.jpg" alt="New York" style="width:60%;">
				<div class="carousel-caption">
					<h3>New York</h3>
					<p>We love the Big Apple!</p>
				</div>
			</div>


			<div class="item">
				<img src="images/cuarto5.jpg" alt="New York" style="width:57%;">
				<div class="carousel-caption">
					<h3>New York</h3>
					<p>We love the Big Apple!</p>
				</div>
			</div>

		</div>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</body>
