<?php
session_start();
if(!isset($_SESSION["user"]))
{
  header("location:index.php");
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Panel de administración| Facturación Web</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Perfil de la empresa">

  <!-- favicon -->
  <link rel="shortcut icon" href="../images/favicon.png" />

  <!-- Bootstrap 3.3.2 -->
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

  <!-- Fungsi untuk membatasi karakter yang diinputkan -->
  <script language="javascript">
  function getkey(e)
  {
    if (window.event)
    return window.event.keyCode;
    else if (e)
    return e.which;
    else
    return null;
  }

  function goodchars(e, goods, field)
  {
    var key, keychar;
    key = getkey(e);
    if (key == null) return true;

    keychar = String.fromCharCode(key);
    keychar = keychar.toLowerCase();
    goods = goods.toLowerCase();

    // check goodkeys
    if (goods.indexOf(keychar) != -1)
    return true;
    // control keys
    if ( key==null || key==0 || key==8 || key==9 || key==27 )
    return true;

    if (key == 13) {
      var i;
      for (i = 0; i < field.form.elements.length; i++)
      if (field == field.form.elements[i])
      break;
      i = (i + 1) % field.form.elements.length;
      field.form.elements[i].focus();
      return false;
    };
    // else return false
    return false;
  }
  </script>

</head>
<body class="skin-red fixed">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="main.php" class="logo"><b>Administración </b>Hotel</a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Llamar el archivo "top-menu.php" para visualizar el menu -->
            <?php include "top-menu.php" ?>
          </ul>
        </div>
      </nav>
    </header>

    <!-- BARRA LATERAL -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <ul class="sidebar-menu">
          <li class="header">MENU</li>

          <li class="active">
            <a href="modules/home/view.php"><i class="fa fa-home"></i> Inicio </a>
          </li>

          <li class="active">
            <a href="nhabit.php"><i class="fa fa-pencil"></i> Crear Nueva Habitación</a>
          </li>

          <li class="active">
            <a href=""><i class="fa fa-users"></i> Crear Nuevo Usuario</a>
          </li>

          <li class="active">
            <a href="view.php"><i class="fa fa-search"></i> Consultar Reserva</a>
          </li>

          <li class="active">
            <a href=""><i class="fa fa-search"></i> Consultar Factura</a>
          </li>
        </ul>
      </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
      <h1>
        <i class="fa fa-desktop icon-title"></i> LISTA DE HABITACIONES
      </h1>
    </section>


      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">

            <div class="box box-primary">
              <table id="dataTables1" class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th class="center">No.</th>
                    <th class="center">Estado</th>
                    <th class="center">Nombre</th>
                    <th class="center">Servicios</th>
                    <th class="center">NoCamas</th>
                    <th class="center">Editar/Eliminar</th>


                  </tr>
                </thead>
                <tbody>
                  <?php
                  $con = mysqli_connect("localhost","root","","hotel") or die(mysql_error());






                   $query = mysqli_query($con, "SELECT * from habitacion INNER JOIN estado on habitacion.ESTA_ID=estado.ESTA_ID")
                   or die('Hubo un error en la consulta de los datos: '.mysqli_error($con));


                  $no = 1;

                  // tampilkan data
                  while ($data = mysqli_fetch_assoc($query)) {
                    // Mostrar contenido de la tabla desde la base de datos a la tabla en la aplicación
                    echo "<tr>
                    <td width='20' class='center'>$no</td>
                    <td width='30'>$data[ESTA_NOMBRE]</td>
                    <td width='30'>$data[HABI_NOMBRE]</td>
                    <td width='120'>$data[HABI_SERVICIOS]</td>
                    <td width='30'>$data[HABI_NCAMAS]</td>
                    <td class='center' width='70'>
                    <div>
                    <a data-toggle='tooltip' data-placement='top' title='Editar' style='margin-right:5px' class='btn btn-primary btn-sm' href=''>
                    <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                    </a>";
                    ?>

                    <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" href="" onclick="return confirm('Estas seguro que quieres eliminar <?php  ?> ?');">
                      <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
                    </a>
                    <?php
                    echo " </div>
                    </td>
                    </tr>";
                    $no++;
                  }
                  ?>
                </tbody>
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div><!--/.col -->
      </section>

      <div class="modal fade" id="logout">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><i class="fa fa-sign-out"> Cerrar sesión</i></h4>
            </div>
            <div class="modal-body">
              <p>¿Seguro que quieres cerrar la sesión? </p>
            </div>
            <div class="modal-footer">
              <a type="button" class="btn btn-danger" href="logout.php">Sí­, Salir</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </div><!-- /.content-wrapper -->
  </div><!-- ./wrapper -->

  <!-- jQuery 2.1.3 -->
  <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <!-- Bootstrap 3.3.2 JS -->
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- datepicker -->
  <script src="assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
  <!-- DATA TABES SCRIPT -->
  <script src="assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
  <script src="assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
  <!-- Datepicker -->
  <script src="assets/plugins/datepicker/bootstrap-datepicker.min.js" type="text/javascript"></script>
  <!-- Slimscroll -->
  <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
  <!-- FastClick -->
  <script src='assets/plugins/fastclick/fastclick.min.js'></script>
  <!-- AdminLTE App -->
  <script src="assets/js/app.min.js" type="text/javascript"></script>

  <!-- page script -->
  <script type="text/javascript">
  $(function () {
    // datepicker plugin
    $('.date-picker').datepicker({
      autoclose: true,
      todayHighlight: true
    });

    // DataTables
    $("#dataTables1").dataTable();
    $('#dataTables2').dataTable({
      "bPaginate": true,
      "bLengthChange": false,
      "bFilter": false,
      "bSort": true,
      "bInfo": true,
      "bAutoWidth": false
    });
  });
  </script>

  <script src="/assets/plugins/ckeditor/ckeditor.js"></script>

  <script>
  var roxyFileman = '/assets/plugins/ckeditor/plugins/fileman/index.html';
  $(function () {
    CKEDITOR.replace('ckeditor', {filebrowserBrowseUrl: roxyFileman,
      filebrowserImageBrowseUrl: roxyFileman + '?type=image',
      removeDialogTabs: 'link:upload;image:upload'});
    });
    </script>

  </body>
</html>
