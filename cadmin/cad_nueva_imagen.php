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

<a href="private.php" id="cancelar">X Cancelar acción</a>
<div class="clearfix"></div>

<form enctype="multipart/form-data" action="cad_nueva_imagen_i.php" id="contenido" method="post">

<label>* El tamaño sugerido de imagen es de 1600px de ancho por 1000px de alto a una resolución de 72ppi. Cuidar que no exceda los 300K de peso. El formato debe ser .jpg, .gif, .png. Cuidar que el nombre de archivo sea alfanumérico. Evitar que contenga acentos, ñ o caracteres extraños.</label>

<input type="file" id="ufile[]" name="ufile[]" />

<label>Selecciona la sección a la que corresponde esta nueva imagen.</label>

<select name="cat">					
<?			
$resultado = @mysql_query('SELECT * FROM tb_categorias order by id');
while ($fila = mysql_fetch_array($resultado)) {
	echo('<option value="' . utf8_encode($fila['id']) . '">' . utf8_encode($fila['label']) . '</option>');
}
?>
</select>


<!--
<label>Orden</label>
<input type="text" id="orden" maxlength="1" name="orden" />
-->

<input type="submit" id="boton" value="Agregar"/>
</form>

<div class="clearfix"></div><!-- /clearfix -->
</div><!-- / WRAPPER -->
</body>
</html>
