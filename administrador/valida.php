<?php
include('conexion.php');
session_start();
$cn=Conectarse();
$vlogin=$_POST["t1"];
$vclave=$_POST["t2"];

$sql="select * from usuario where usuario='$vlogin' and clave='$vclave' ";
$result=mysql_query($sql);
if($row=mysql_fetch_array($result)){
	$_SESSION['iduser']=$row["usuario"];
	$_SESSION['nombres']=$row["nombres"];
	header("LOCATION:index1.php");
}
else{
	header("LOCATION:index.php?iderror=1");
}
?>

