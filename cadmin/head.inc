
<div id="wrap">

<a href="private.php" target="_self"><img src="petrol_logo_main.png" class="mt30 floatl"/></a>
<ul id="nav2">
<?php
$categorias = @mysql_query('SELECT * FROM tb_categorias ORDER BY id ASC');
while ($fila = mysql_fetch_array($categorias)) {		
	echo ('<li><a href="cad_categoria.php?cat='. utf8_encode($fila['id']) .'">'. utf8_encode($fila['label']) .'</a></li>');
}
?>
<li id="sort"><a href="logout.php" target="_self">X Salir</a></li>
<div class="clearfix"></div>
</ul>

<div class="clearfix"></div><!-- /clearfix -->
