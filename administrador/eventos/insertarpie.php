<?php include('../conexion.php');
//recibo las variables

$descripcion=$_POST["descripcionpie"];

$cn = Conectarse();
$sql = "insert into pie(descripcion) values('$descripcion')";
//echo $sql;
$result = mysql_query($sql);
?>
<html>
<head><title></title>
<style type="text/css">
<!--
.style3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
.style4 {font-size: 12px}
.style5 {color: #CCCCCC}
-->
</style>
</head>
<body topmargin="0" leftmargin="0" >
<link rel="stylesheet" type="text/css" href="../bruni.css">
<table width="100%" cellspacing="0" cellpadding="0">
<tr bgcolor="#999999">
<td width="13%" height="35"><span class="style4"></span></td>
<td width="54%" valign="bottom"><span class="style3">Su registro ha sido agregada correctamente </span></td>
<td width="33%"><span class="style4"></span></td>
</tr>
<tr>
<td><span class="style5"></span></td>
<td><span class="style5"></span></td>
<td><span class="style5"></span></td>
</tr>
<tr>
<td><span class="style5"></span></td>
<td><span class="style5"></span></td>
<td><a href="javascript:window.close();" class="c style5"> Cerrar </a></td>
</tr>
</table>
</body>
</html>