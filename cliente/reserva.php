
<?php
include('../db.php');
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
	<link rel="shortcut icon" href="../images/favicon.png" />
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

<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


	<!--//fonts-->
</head>
<body>
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

							<li class="menu__item"><a href="start.php" class="menu__link scroll">Inicio</a></li>
							<li class="menu__item"><a href="about.php" class="menu__link scroll">Nosotros</a></li>
							<li class="menu__item"><a href="reserva.php" class="menu__link scroll">Reserva de Habitaciones</a></li>
							<li class="menu__item"><a href="" class="menu__link scroll">Contáctenos</a></li>
							<li class="menu__item"><a href="../admin/index.php" class="menu__link scroll">Administrar Hotel</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>


	<div class="container">
		<body style="background-color:rgba(208, 231, 27, 0.65);">
			<div class= "row">
				<div class="col-md-7">
					<P><br>
						<H1 style=color:darkblue;>BUSCA TU HABITACIÓN</H1></p>
						<P style=color:red;><br><strong>NOTA: TODAS LAS HABITACIONES INCLUYEN DESAYUNO Y PARQUEADERO</strong></br></p>
							<br>





							<form action="/action_page.php">
	  						<div class="form-group">
	    						<label for="nadultos"> Adultos (15 USD):</label>
	    						<select class="form-control" id="nadultos">
										<option value=""> Seleccione número </option>
										<option>1</option>
    								<option>2</option>
    								<option>3</option>
    								<option>4</option>
  							</select>
	  						</div>
	  						<div class="form-group">
	    						<label for="nniños"> Niños (10 USD):</label>
	    						<select class="form-control" id="nniños">
										<option value=""> Seleccione número </option>
										<option>1</option>
    								<option>2</option>
    								<option>3</option>
    								<option>4</option>
									</select>
	  						</div>





								<script type="text/javascript">
								$(document).ready(function() {
    						$("#datepicker").datepicker({
									dateFormat: 'dd/mm/yy',
    						}).datepicker("setDate", new Date());
								});
								</script>

								<div class="form-group">
	    						<label for="fecha">Fecha:</label>
	    						<input type="text" name="fecha" id="datepicker"  readonly="readonly" disabled size="10" />


	  						</div>

	  						<div class="checkbox">
	    						<label><input type="checkbox"> Remember me</label>
	  						</div>
	  						<button type="submit" class="btn btn-default">Submit</button>


							</form>





						<DIV ALIGN="justify"><P>
						</DIV>



						</div>
						<div class="  col-md-5">
							<P><br><H1 style=color:darkblue;>NUESTROS SERVICIOS</H1></p></br>
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
										<li data-target="#myCarousel" data-slide-to="7"></li>
										<li data-target="#myCarousel" data-slide-to="8"></li>
										<li data-target="#myCarousel" data-slide-to="9"></li>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active">
											<img src="images/fr1.jpg" alt="Comida para deleitar"style="width:100%;">
											<div class="carousel-caption">
												<h3>Los Angeles</h3>
												<p>LA is always so much fun!</p>
											</div>
										</div>

										<div class="item">
											<img src="images/fr3.jpg" alt="Chicago"style="width:100%;">
											<div class="carousel-caption">
												<h3>Chicago</h3>
												<p>Thank you, Chicago!</p>
											</div>
										</div>

										<div class="item">
											<img src="images/fr2.jpg" alt="New York"style="width:100%;">
											<div class="carousel-caption">
												<h3>New York</h3>
												<p>We love the Big Apple!</p>
											</div>
										</div>
										<div class="item">
											<img src="images/fr4.jpg" alt="New York" style="width:100%">
											<div class="carousel-caption">
												<h3>New York</h3>
												<p>We love the Big Apple!</p>
											</div>
										</div>

										<div class="item">
											<img src="images/fr5.jpg" alt="New York" style="width:100%;">
											<div class="carousel-caption">
												<h3>New York</h3>
												<p>We love the Big Apple!</p>
											</div>
										</div>

										<div class="item">
											<img src="images/fr6.jpg" alt="New York" style="width:100%;">
											<div class="carousel-caption">
												<h3>New York</h3>
												<p>We love the Big Apple!</p>
											</div>
										</div>

										<div class="item">
											<img src="images/cuarto5.jpg" alt="New York" style="width:100%;">
											<div class="carousel-caption">
												<h3>New York</h3>
												<p>We love the Big Apple!</p>
											</div>
										</div>

										<div class="item">
											<img src="images/fr7.jpg" alt="New York" style="width:100%;">
											<div class="carousel-caption">
												<h3>New York</h3>
												<p>We love the Big Apple!</p>
											</div>
										</div>

										<div class="item">
											<img src="images/fr8.jpg" alt="New York" style="width:100%;">
											<div class="carousel-caption">
												<h3>New York</h3>
												<p>We love the Big Apple!</p>
											</div>
										</div>

										<div class="item">
											<img src="images/fr9.jpg" alt="New York" style="width:100%;">
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
							</div>
						</div>
					</div>
				</div>
			</body>
		</div>
	</body>
