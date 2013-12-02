<?php include('../conexion.php');
//recibo las variables
$nombres=$_POST["t1"];
$usuario=$_POST["t2"];
$clave=$_POST["t3"];

$cn = Conectarse();
$sql = "insert into usuario(nombres,usuario,clave) values('$nombres','$usuario','$clave')";
//echo $sql;
$result = mysql_query($sql);
?>