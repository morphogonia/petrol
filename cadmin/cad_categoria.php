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
$cat = $_GET['cat'];
?>

<a href="cad_nueva_imagen.php" id="nimagen">Subir nueva imagen</a>
<div class="clearfix"></div>

<?php 
$request_title = @mysql_query("SELECT * FROM tb_categorias WHERE id='$cat'");
$content_title = mysql_fetch_array($request_title);
echo('<h2>EDITANDO: ' . utf8_encode($content_title['label']) . '</h2>');
?>



<?php 
$request_images = "SELECT * FROM tb_images WHERE cat='$cat' order by ord DESC";
$result_images = mysql_query($request_images);
while ($line = mysql_fetch_array($result_images)) {
	echo('<div class="cadmin_cat">');
	echo('<img src="../fotos/'. utf8_encode($line['image']) .'" width=420 />');
?>

<form enctype="multipart/form-data" class="form_ord" action="cad_cat_img_o.php?cat=<? echo utf8_encode($cat); ?>&id=<? echo utf8_encode($line['id']); ?>" method="post">
	<label>Orden:</label>
	<input type="text" class="num" name="num" value="<? echo utf8_encode($line['ord']); ?>"/>
	<input type="submit" value="Cambiar orden" class="submit" />
	<div class="clearfix"></div><!-- /clearfix -->
</form>

<?php
	echo('<a href="cad_cat_img_d.php?cat='.$cat.'&id='. utf8_encode($line['id']) .'" class="borrar" onclick="return confirm(\'&iquest;Seguro que deseas eliminar esta imagen?\');">X ELIMINAR IMAGEN</a>');
	echo('<div class="clearfix"></div></div>');
}
?>





<div class="clearfix"></div><!-- /clearfix -->
</div><!-- / WRAPPER -->


</body>
</html>
