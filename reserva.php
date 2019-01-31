<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Registro</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- FontAwesome 4.3.0 -->
  <link href="assets/plugins/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- DATA TABLES -->
  <link href="assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
  <!-- Datepicker -->
  <link href="assets/plugins/datepicker/datepicker.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="assets/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link href="assets/css/skins/skin-red.min.css" rel="stylesheet" type="text/css" />
  <!-- Date Picker -->
  <link href="assets/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
  <!-- Custom CSS -->
  <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js">
  </script>
</head>


<body class="skin-red fixed">
  <nav class="navbar navbar-expand-sm bg-blue navbar-dark">
    <a class="navbar-brand" href="javascript:history.back(-1);">Regresar</a>
    <h1 style=color:white;>Lista De Habitaciones</h1>
</nav>
  <div class="jumbotron text-center" style="margin-bottom:0">
    <h3>Selecciona tu Habitación</h3>
    <img id="mi_imagen" src="../images/about.jpg" width="900" height="350"/>
  </div>
  <nav class="navbar navbar-expand-sm bg-blue navbar-dark">
  </nav>
<?php
include('db.php');
//var_dump($_POST);
$fecha0=date("Y-m-d");
$fecha1=$_POST["fechall"];
$fecha2=$_POST["fechasal"];
$thabi=$_POST["txtThabi"];
$tcama=$_POST["txtTcama"];

if ($fecha2<$fecha1)
{
  header("Location:../registro.php");
}
else if($fecha1<$fecha0)
{
  header("Location:../registro.php");
}


?>

<form  class="form-horizontal" action="seleccionar.php" method="post">
  <div class="container">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size:120%;">
    <thead>
        <tr class="table-danger">
            <th class="center" width="30">Cod.</th>
            <th class="center"width="30">Nombre</th>
            <th class="center"width="30">Tipo habitacion</th>
            <th class="center"width="30">Tipo cama</th>
            <th class="center"width="30">No.Camas</th>
            <th class="center"width="30">Capacidad de Personas</th>
            <th class="center"width="30">Precio</th>
            <th class="center"width="100">Sevicios</th>
            <th class="center"width="100">Imagen</th>
            <th width="20">Seleccionar</th>

        </tr>
    </thead>
    <tbody>
<?php
$cadena="SELECT * FROM habitacion WHERE HABI_THABI='$thabi'and HABI_TCAMAS='$tcama' and ESTA_NOMBRE='DISPONIBLE'";
$rs = mysqli_query($con,$cadena);
//echo $cadena;
      while($trow=mysqli_fetch_array($rs) )
      {
        $cod=$trow['HABI_ID'];
        $nomh=$trow['HABI_NOMBRE'];
        $thabit=$trow['HABI_THABI'];
        $tcama=$trow['HABI_TCAMAS'];
        $ncama=$trow['HABI_NCAMAS'];
        $capacidad=$trow['CAPACIDAD'];
        $precio=$trow['HABI_COSTO'];
        $serv=$trow['HABI_SERVICIOS'];
        $imagen=$trow['IMAGEN'];

        echo"<tr class='table-warning'>
          <th class='center'>$cod</th>
          <th class='center'>$nomh</th>
          <th class='center'>$thabit</th>
          <th class='center'>$tcama</th>
          <th class='center'>$ncama</th>
          <th class='center'>$capacidad</th>
          <th class='center'>$precio</th>
          <th class='text-justify'>$serv</th>";
  ?>

<?php
echo '<td class="center"><img src="../../admin/'.$trow["IMAGEN"].'" width="250" height="150"/></td>';
 ?>




          <td><input type="checkbox" name="idHabitacion[]" value="<?php echo $trow['HABI_ID']?>"/></td>
<?php
}
 ?>
</tbody>
</table>
</div>
<br>

  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Nombres y Apellidos:</label>
    <div class="col-sm-5" >
      <input style="font-size:130%;"type="text"name="nombres" class="form-control" id="name" placeholder="Ingrese sus nombres y Apellidos" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="ced">Cédula:</label>
    <div class="col-sm-5">
      <input style="font-size:130%;"type="text" name= "ced"class="form-control" id="ced" placeholder="Ingrese su número de cédula" required>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="adul">Número de Adultos:</label>
    <div class="col-sm-5">
      <input style="font-size:130%;" type="text"name="numA" class="form-control" id="adult" placeholder="Ingrese número de adultos" required>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="ninios">Número de Niños:</label>
    <div class="col-sm-5">
      <input style="font-size:130%;" type="text" name="numN"class="form-control" id="ninios" placeholder="Ingrese número de niños" required>
    </div>
  </div>

  <input type="hidden" name="dia1" value="<?php echo $fecha1 ?>">
  <input type="hidden" name="dia2" value="<?php echo $fecha2 ?>">
  <input type="hidden" name="tipoH" value="<?php echo $thabit ?>">
  <input type="hidden" name="tipoC" value="<?php echo $tcama ?>">


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-5">
      <button style="font-size:130%;" type="submit" name ="btnSelect" id="regist" class="btn btn-success">Registrar</button>
    </div>
  </div>
</div>
</form>
</body>
</html>
