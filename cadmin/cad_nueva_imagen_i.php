<?
require('conexion.php');
$link = conectarse();

$cat=$_POST['cat'];


$consulta = @mysql_query("SELECT * FROM tb_images WHERE cat='$cat' ORDER BY ord DESC" , $link);
$var_last = mysql_fetch_array($consulta);
$idp = $var_last['ord'] + 1;


if (!empty($_FILES['ufile']['size'][0])) {
	$f1=$_FILES['ufile']['name'][0];
	$path1= "../fotos/".$_FILES['ufile']['name'][0];
	copy($_FILES['ufile']['tmp_name'][0], $path1);
	$filesize1=$_FILES['ufile']['size'][0];
	mysql_query("INSERT INTO tb_images VALUES('','$f1', '$cat', '$idp')", $link);
}

print '<meta http-equiv="refresh" content="1; url=private.php">';
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

<img src="prel.gif" class="mt30" />

<div class="clearfix"></div><!-- /clearfix -->
</div><!-- / WRAPPER -->
</body>
</html>
