<?php
	function conectarse(){
	$servidor="localhost";
	$basededatos="cablemaxuy";
	$usuario="root";
	$clave="root";
	$cn=mysql_connect($servidor,$usuario,$clave)or die("Error conectando a la base de datos clase");
	mysql_select_db($basededatos,$cn)or die("Error seleccionando la BD clase");
	return $cn;
	}
?>