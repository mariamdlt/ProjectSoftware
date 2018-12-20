<?php
session_start();
if(isset($_SESSION["user"]))
{
  header("location:main.php");
}

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title> HOTELSITE ADMIN</title>

  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Perfil de la empresa">
  <meta name="keywords" content="FacturacionWeb.site" />

  <!-- favicon -->
  <link rel="shortcut icon" href="../images/favicon.png" />

  <!-- Bootstrap 3.3.2 -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- Font Awesome Icons -->
  <link href="assets/plugins/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="assets/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  <!-- iCheck -->
  <link href="assets/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
  <!-- Custom CSS -->
  <link href="assets/css/style.css" rel="stylesheet" type="text/css" />


</head>




<body class="login-page bg-login">
  <div class="login-box">
    <div style="color:#00a65a">
    </div><!-- /.login-logo -->


<div class="bottom"> <font size=6 face="Comic Sans MS,arial"> <h1= align="center"><a href="../index.php">HOTELSITE WEB</a></h1></font></div>


    <div class="login-box-body">
        <p class="login-box-msg"><i class="fa fa-user icon-title"></i> Inicio de sesión</p>
        <br/>
        <form method="POST">
          <fieldset class="clearfix">
            <p><input type="text"  name="user" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required> <!-- JS because of IE support; better: placeholder="Username" -->
            <span class="glyphicon glyphicon-user"></span></p>
            <p><input type="password" name="pass"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required>
            <span class="glyphicon glyphicon-lock"></span></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <br/>
            <div class="row">
            <div class="col-xs-12">
              <input type="submit" class="btn btn-primary btn-lg btn-block btn-flat" name="login" value="Ingresar al sistema" />
            </div><!-- /.col -->
          </div>
          </fieldset>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>


</body>
</html>

<?php
include('db.php');


if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form

  $myusername = mysqli_real_escape_string($con,$_POST['user']);
  $mypassword = mysqli_real_escape_string($con,$_POST['pass']);


  $sql = "SELECT user_id FROM users WHERE email = '$myusername' and password = '$mypassword'";

  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $active = $row['active'];

  $count = mysqli_num_rows($result);

  // If result matched $myusername and $mypassword, table row must be 1 row

  if($count == 1) {

    $_SESSION['user'] = $myusername;

    header("location: main.php");
  }else {
    echo '<script>alert("Tu usuario o contraseña es incorrecto") </script>' ;
  }
}
?>
