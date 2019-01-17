
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
	<link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">


<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery-ui.js"></script>




<script>
/**
* Documentado en http://lwp-l.com/s2379
*/
function isValidDate(day,month,year)
{
var dteDate;
month=month-1;
dteDate=new Date(year,month,day);
return ((day==dteDate.getDate()) && (month==dteDate.getMonth()) && (year==dteDate.getFullYear()));
}

/**
* Funcion para validar una fecha
* Tiene que recibir:
* La fecha en formato español dd/mm/yyyy
* Devuelve:
* true o false
*/
function validate_fecha(fecha)
{
var patron=new RegExp("^(19|20)+([0-9]{2})([-])([0-9]{1,2})([-])([0-9]{1,2})$");

if(fecha.search(patron)==0)
{
var values=fecha.split("-");
if(isValidDate(values[2],values[1],values[0]))
{
return true;
}
}
return false;
}

function calcularDias()
{
var fechaInicial=document.getElementById("fechaInicial").value;
var fechaFinal=document.getElementById("fechaFinal").value;
var resultado="";
if(validate_fecha(fechaInicial) && validate_fecha(fechaFinal))
{
inicial=fechaInicial.split("-");
final=fechaFinal.split("-");
// obtenemos las fechas en milisegundos
var dateStart=new Date(inicial[0],(inicial[1]-1),inicial[2]);
var dateEnd=new Date(final[0],(final[1]-1),final[2]);

if(dateStart<dateEnd)
{
// la diferencia entre las dos fechas, la dividimos entre 86400 segundos
// que tiene un dia, y posteriormente entre 1000 ya que estamos
// trabajando con milisegundos.
var diasDif = dateEnd.getTime() - dateStart.getTime();
resultado="Total de días: "+ (diasDif/86400000) +" ";

}else{
alert("La fecha inicial es posterior a la fecha final");

}
}else{
if(!validate_fecha(fechaInicial))
alert("La fecha inicial es incorrecta");
if(!validate_fecha(fechaFinal))
alert("La fecha final es incorrecta");
}
document.getElementById("dias").innerHTML=resultado;

}
</script>




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




								<script>
function validar(frm) {
  frm.sub.disabled = true;
  for (i=0; i<3; i++)
    if (frm['txt'+i].value =='') return
  frm.sub.disabled = false;
if(frm.sub.disabled==true)
{
	frm.sub1.disabled=true;
}
else if(frm.sub.disabled==false)
{
	frm.sub1.disabled=false;
}


}
</script>
</head>

<form>
<input type="text" name="txt0" onkeyup = "validar(this.form)" />
<input type="text" name="txt1" onkeyup = "validar(this.form)" />
<input type="text" name="txt2" onkeyup = "validar(this.form)" />
<input type="button" name="sub" disabled="disabled" value="buscar"/>
<input type="submit" name="sub1" disabled="disabled" value="buscar"/>
</form>


</form>





							<br>
						</div>



						<div class="  col-md-6">
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
												<h3>Platos Típicos de la Costa y Sierra</h3>
												<p>Ven y disfruta de tus vacaciones con nosotros!</p>
											</div>
										</div>

										<div class="item">
											<img src="images/fr3.jpg" alt="Chicago"style="width:100%;">
											<div class="carousel-caption">
												<h3>Incluye desayuno y parqueadero</h3>
												<p>Ven y disfruta de tus vacaciones con nosotros!</p>
											</div>
										</div>

										<div class="item">
											<img src="images/fr2.jpg" alt="New York"style="width:100%;">
											<div class="carousel-caption">
												<h3>Incluye desayuno</h3>
												<p>Gracias por preferirnos!</p>
											</div>
										</div>
										<div class="item">
											<img src="images/fr4.jpg" alt="New York" style="width:100%">
											<div class="carousel-caption">
												<h3>El costo está a tu alcance</h3>
												<p>Ven y disfruta de tus vacaciones con nosotros!</p>
											</div>
										</div>

										<div class="item">
											<img src="images/fr5.jpg" alt="New York" style="width:100%;">
											<div class="carousel-caption">
												<h3>Habitaciones con buen ambiente</h3>
												<p>Gracas por preferirnos!</p>
											</div>
										</div>

										<div class="item">
											<img src="images/fr6.jpg" alt="New York" style="width:100%;">
											<div class="carousel-caption">
												<h3>Disfruta de tus vacaciones con nosostros</h3>
												<p>Realiza tu reserva ahora mismo!</p>
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
												<h3>Reserva tu habitación</h3>
												<p>Ahora mismo!</p>
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
			</body>
		</div>
	</body>




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
		<link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
		<!--fonts-->
		<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">


	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery-ui.js"></script>




	<script>
	/**
	* Documentado en http://lwp-l.com/s2379
	*/
	function isValidDate(day,month,year)
	{
	var dteDate;
	month=month-1;
	dteDate=new Date(year,month,day);
	return ((day==dteDate.getDate()) && (month==dteDate.getMonth()) && (year==dteDate.getFullYear()));
	}

	/**
	* Funcion para validar una fecha
	* Tiene que recibir:
	* La fecha en formato español dd/mm/yyyy
	* Devuelve:
	* true o false
	*/
	function validate_fecha(fecha)
	{
	var patron=new RegExp("^(19|20)+([0-9]{2})([-])([0-9]{1,2})([-])([0-9]{1,2})$");

	if(fecha.search(patron)==0)
	{
	var values=fecha.split("-");
	if(isValidDate(values[2],values[1],values[0]))
	{
	return true;
	}
	}
	return false;
	}

	function calcularDias()
	{
	var fechaInicial=document.getElementById("fechaInicial").value;
	var fechaFinal=document.getElementById("fechaFinal").value;
	var resultado="";
	if(validate_fecha(fechaInicial) && validate_fecha(fechaFinal))
	{
	inicial=fechaInicial.split("-");
	final=fechaFinal.split("-");
	// obtenemos las fechas en milisegundos
	var dateStart=new Date(inicial[0],(inicial[1]-1),inicial[2]);
	var dateEnd=new Date(final[0],(final[1]-1),final[2]);

	if(dateStart<dateEnd)
	{
	// la diferencia entre las dos fechas, la dividimos entre 86400 segundos
	// que tiene un dia, y posteriormente entre 1000 ya que estamos
	// trabajando con milisegundos.
	var diasDif = dateEnd.getTime() - dateStart.getTime();
	resultado="Total de días: "+ (diasDif/86400000) +" ";

	}else{

	alert("La fecha inicial es posterior a la fecha final");

	}
	}else{
	if(!validate_fecha(fechaInicial))
	alert("La fecha inicial es incorrecta");
	if(!validate_fecha(fechaFinal))
	alert("La fecha final es incorrecta");
	}
	document.getElementById("dias").innerHTML=resultado;

	}
	</script>




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
					<div class="col-md-6">
						<P><br>
							<H1 style=color:darkblue;>Ingrese los datos de la reserva</H1></p>
							<P style=color:red;><br><strong>NOTA: TODAS LAS HABITACIONES INCLUYEN DESAYUNO Y PARQUEADERO</strong></br></p>
								<br>
								<form name="My_form" autocomplete="on"  action="reserva.php" method="post">
									<div class="form-group">
		    						<label for="fecha">Fecha actual:</label>
		    						<input type="text" name="fecha"   class="form-control" value=<?php date_default_timezone_set('America/Guayaquil'); echo date("Y-m-d");?>  disabled>
		  						</div>
									<br>
									<script>
														function solonumeros(e)
																			{
													 var key = window.event ? e.which : e.keyCode;
																					if(key < 48 || key > 57)
																							e.preventDefault();
																			}
																			</script>





								<div class="row">
									<div class="col-xs-6">
									<div class="form-group">
										<label for ="txtThabi">Tipo de Habitación </label>
											<select name="txtThabi" class="form-control"id ="txtThabi">
													<option value=""> Seleccione Tipo de Habitación </option>
													 <option value="HABITACION INDIVIDUAL">Habitación individual</option>
													 <option value="HABITACION DOBLE">Habitación doble</option>
													 <option value="HABITACION FAMILIAR">Habitación Familiar</option>
													 <option value="HABITACION MATRIMONIAL">Habitación Matrimonial</option>
											</select>
									</div>
										</div>
										<div class="col-xs-6">
									<div class="form-group">
										<label for ="txtTcama">Tipo de Cama</label>
											<select name="txtTcama" class="form-control" id ="txtTcama">
													<option value=""> Seleccione Tipo de Cama </option>
													 <option value="CAMA SIMPLE">Cama simple</option>
													 <option value="CAMA DOBLE">Cama doble</option>
													 <option value="CAMA TRIPLE">Cama triple</option>
											</select>
									</div>
											</div>
													</div>

									<div class="form-group">
										<input type="submit" name="search" class="btn btn-sm btn-primary"  value="Buscar habitacion">
									</div>


	</form>

	<div class="panel panel-default">
	<div class="panel-body">
	<div class="table-responsive">
	<table class="table table-striped table-bordered table-hover" id="dataTables-example">

			<thead>
					<tr>
							<th>Cod.</th>
							<th>Nombre</th>
							<th>Tipo habitacion</th>
							<th>Tipo cama</th>
							<th>No.Camas</th>
							<th>Accion</th>

					</tr>
			</thead>
			<tbody>
										<?php
										include('../db.php');
							if(isset($_POST['search']))
							{
									 $troom = $_POST['txtThabi'];
									 $tbed = $_POST['txtTcama'];
									 $estado = 'DISPONIBLE';
									 $check="SELECT * FROM habitacion WHERE HABI_THABI = '$troom' AND 	HABI_TCAMAS = '$tbed' AND ESTA_NOMBRE='DISPONIBLE'";
									 $rs = mysqli_query($con,$check);
									 while($trow=mysqli_fetch_array($rs) )
									 {
										 $nomh=$trow['HABI_NOMBRE'];
										 $serv=$trow['HABI_SERVICIOS'];
										 $ncama=$trow['HABI_NCAMAS'];
										 $cod1=$trow['HABI_ID'];
										 $thabit=$trow['HABI_THABI'];




										 echo"<tr>
											 <th>".$trow['HABI_ID']."</th>
											 <th>".$trow['HABI_NOMBRE']."</th>
											 <th>".$trow['HABI_THABI']."</th>
											 <th>".$trow['HABI_TCAMAS']."</th>
											 <th>".$trow['HABI_NCAMAS']."</th>
											 <td><button class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>
																 Ver
														</button></td>";

										 }
									 }
	?>

				 </tbody>
	</table>
	</div>
	</div>
	</div>

	<div class="row">
		<div class="col-xs-6">
			<div class="form-group">
				<label for="nadultos"> Adultos (15 USD):</label>
				<input type="text" name="nadultos"   class="form-control" id= "nadultos" onkeypress="solonumeros(event);" placeholder="Ingrese número de adultos" required>
			</div>
			</div>

			<div class="form-group">
				<div class="col-xs-6">
				<label for="nninos"> Niños (15 USD):</label>
				<input type="text" name="nninos"   class="form-control" id= "nninos" onkeypress="solonumeros(event);" placeholder="Ingrese número de adultos" required>
			</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
		<div class="form-group">
			<label for="fechaInicial">Fecha de llegada:</label>
			<input type="date" name="fechaInicial"   class="form-control" id= "fechaInicial" value=<?php echo date('Y-m-d');?>>
		</div>
		</div>
		<div class="form-group">
			<div class="col-xs-6">
			<label for="fechaFinal">Fecha de salida:</label>
			<input type="date" name="fechaFinal"   class="form-control" id= "fechaFinal" value=<?php echo date('Y-m-d');?>/>
		</div>
		</div>
		</div>
		<div class="form-group">
			<input type="button" name="sub" class="btn btn-sm btn-primary"  value="Verficar fecha" onclick="calcularDias()">
		</div>


	</div>




	<div class="panel-body">

	  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  	<div class="modal-dialog">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	            <h4 class="modal-title" id="myModalLabel">Información de Habitación</h4>
					</div>
					<form method="post">
						<div class="modal-body">
	            <div class="form-group">
	              <label>Código de Habitación:</label>
	                <input name="cod1" value="<?php echo $cod1; ?>" class="form-control" readonly>
							</div>
						</div>
	          <div class="modal-body">
	            <div class="form-group">
	              <label>Habitación:</label>
	                <input name="habi1" value="<?php echo $nomh; ?>" class="form-control" readonly>
							</div>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Tipo de Habitación</label>
									<input name="thabi1" value="<?php echo $troom ; ?>" class="form-control" readonly>
											</div>
							</div>
						<div class="modal-body">
								<div class="form-group">
									<label>Tipo de Cama</label>
										<input name="tcama1" value="<?php echo $tbed ; ?>" class="form-control" readonly>
												</div>
						</div>
						<div class="modal-body">
								<div class="form-group">
									<label>Número de Camas</label>
										<input name="ncama1" value="<?php echo $ncama ; ?>" class="form-control" readonly>
												</div>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Servicios</label>
									<input name="serv1" value="<?php echo $serv ; ?>" class="form-control" readonly>
											</div>
						</div>
						<div class="modal-footer">
		            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
									<input type="submit" name="up" value="Update" class="btn btn-primary">
					</form>

					<?php
									if(isset($_POST['up']))
									{


										$thabi1=$_POST["thabi1"];
										$tcama1=$_POST["tcama1"];
										$cod1=$_POST["cod1"];
										$sel="SELECT * FROM `habitacion` WHERE HABI_ID= '$cod1' AND HABI_THABI='$thabit' AND  HABI_TCAMAS='$tcama1'";
										$r = mysqli_query($con,$sel);
										$data = mysqli_fetch_array($r);

										$self="SELECT * FROM `factura` WHERE FACT_ID= '$last_id_f'";
										$rf = mysqli_query($con,$self);
										$dataf = mysqli_fetch_array($rf);

										$sqd ="INSERT INTO `detalle`( `FACT_ID`, `HABI_ID`) VALUES ('$last_id_f','$cod1')" ;

										if(mysqli_query($con,$sqd))
										{

										echo' <script language="javascript" type="text/javascript"> alert("Habitación Seleccionada"); window.location = "reserva.php"</script>';
										}

									}
									ob_end_flush();
					?>

	      </div>
	    </div>
	  </div>
	</div>









							<div class="  col-md-6">
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
													<h3>Platos Típicos de la Costa y Sierra</h3>
													<p>Ven y disfruta de tus vacaciones con nosotros!</p>
												</div>
											</div>

											<div class="item">
												<img src="images/fr3.jpg" alt="Chicago"style="width:100%;">
												<div class="carousel-caption">
													<h3>Incluye desayuno y parqueadero</h3>
													<p>Ven y disfruta de tus vacaciones con nosotros!</p>
												</div>
											</div>

											<div class="item">
												<img src="images/fr2.jpg" alt="New York"style="width:100%;">
												<div class="carousel-caption">
													<h3>Incluye desayuno</h3>
													<p>Gracias por preferirnos!</p>
												</div>
											</div>
											<div class="item">
												<img src="images/fr4.jpg" alt="New York" style="width:100%">
												<div class="carousel-caption">
													<h3>El costo está a tu alcance</h3>
													<p>Ven y disfruta de tus vacaciones con nosotros!</p>
												</div>
											</div>

											<div class="item">
												<img src="images/fr5.jpg" alt="New York" style="width:100%;">
												<div class="carousel-caption">
													<h3>Habitaciones con buen ambiente</h3>
													<p>Gracas por preferirnos!</p>
												</div>
											</div>

											<div class="item">
												<img src="images/fr6.jpg" alt="New York" style="width:100%;">
												<div class="carousel-caption">
													<h3>Disfruta de tus vacaciones con nosostros</h3>
													<p>Realiza tu reserva ahora mismo!</p>
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
													<h3>Reserva tu habitación</h3>
													<p>Ahora mismo!</p>
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
				</body>
			</div>
		</body>
