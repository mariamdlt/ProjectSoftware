<?php
include('db.php');


if(isset($_POST['btnSelect'])){

  $cedula=$_POST['ced'];
  $adultos=$_POST['numA'];
  $ninio=$_POST['numN'];
  $fecha1=$_POST['dia1'];
  $fecha2=$_POST['dia2'];
  $nombre=$_POST['nombres'];
  $codH=$_POST['idHabitacion'];
  $tipoHabi=$_POST['tipoH'];
  $tipocama=$_POST['tipoC'];




$cliente=mysqli_query($con, "INSERT INTO cliente(CLIE_CEDULA, CLIE_NOMBRES, CLIE_NADULTOS,CLIE_NNINIO,CLIE_FLLEGADA,CLIE_FSALIDA,CLIE_NDIAS)
                  VALUES('$cedula','$nombre','$adultos','$ninio','$fecha1','$fecha2', datediff('$fecha2','$fecha1'))") or die(mysqli_error());

$idCliente=mysqli_insert_id($con);

$factura=mysqli_query($con, "INSERT INTO factura(CLIE_ID)
                  VALUES('$idCliente')") or die(mysqli_error());
$idFactura=mysqli_insert_id($con);





foreach ($_POST['idHabitacion'] as $idHabitacion) {
  mysqli_query($con, "INSERT INTO detalle(FACT_ID,HABI_ID,CED_CLIE,ID_CLIE,TIPO_HABI,TIPO_CAMA) VALUES('$idFactura','$idHabitacion','$cedula','$idCliente','$tipoHabi','$tipocama')") or die(mysqli_error());

  mysqli_query($con, "UPDATE habitacion set ESTA_NOMBRE='RESERVADO' WHERE HABI_ID='$idHabitacion'") or die(mysqli_error());
}

echo "<script> window.history.go(-1);</script>";

}
?>
