<?php
function conectarse(){
		if(!($link=mysql_connect('mysql.petrolrefineria.com','webmaster','w3bm4st3r'))){
			echo 'el servidor no se ha conectado';
			exit();		
			}
		if(!mysql_select_db('dbpetrolrefineria',$link)){
			echo 'la base de datos no se ha conectado';
			exit();
			}
		return $link;		
		}
		$link= conectarse();
		
		mysql_close($link);
?>