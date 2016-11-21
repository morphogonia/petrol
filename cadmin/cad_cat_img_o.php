<?
require('conexion.php');
$link = conectarse();

$cat = $_GET['cat'];
$id = $_GET['id'];
$num=utf8_decode($_POST['num']);

mysql_query("UPDATE tb_images SET ord = '$num' WHERE id = '$id'", $link);
print '<meta http-equiv="refresh" content="1; url=cad_categoria.php?cat='.$cat.'">';
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
