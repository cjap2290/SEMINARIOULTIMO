<?php

        		       
include("conexion.php");
$cn=  conectarse();
$nombre=  strtoupper($_POST['nombre']);
$email=  strtoupper($_POST['email']);
$comentario=  strtoupper($_POST['comentario']);
$rsinsertar="insert into contacto(nombre,email,comentario) values('$nombre','$email','$comentario')";
$insertar=  mysql_query($rsinsertar);
header("Location:contacto.php");
?>