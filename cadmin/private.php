<? 
session_start();
if (!isset($_SESSION['logged_admin_in'])) {
	header('Location: index.php');
}
?>

<html>
<head>
	<title>Petrol Control Panel</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="../favicon.ico" />
	<meta name="author" content="Sandra Bermudez @ bulabe.com" />
	<link rel="stylesheet" href="../style.css" type="text/css" />
</head>

<body>
<?php 
include('../inc/conection.inc');
include('head.inc');
?>

<a href="cad_nueva_imagen.php" id="nimagen">Subir nueva imagen</a>
<div class="clearfix"></div>

<h1>Selecciona la sección que quieres editar.</h1>

<div class="clearfix"></div><!-- /clearfix -->
</div><!-- / WRAPPER -->


</body>
</html>
