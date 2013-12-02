<?php

include("conexion.php");
$cn=  conectarse();
$nombre=  strtoupper($_GET['nombre']);
$email=  strtoupper($_GET['email']);
$comentario=  strtoupper($_GET['comentario']);
$rsinsertar="insert into contacto(nombre,email,comentario) values('$nombre','$email','$comentario')";
$insertar=  mysql_query($rsinsertar);
header("Location:contacto.html");
?>