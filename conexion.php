<?php
function conectarse(){
    $servidor="localhost";
    $basededatos="cablemaxuy";
    $usuario="root";
    $clave="";
    $cn= mysql_connect($servidor,$usuario,$clave) or die("Error conectando a la base de datos almacen");
    mysql_select_db($basededatos,$cn) or die("Error seleccionando la Base de datos");
    return $cn; 
}
?>