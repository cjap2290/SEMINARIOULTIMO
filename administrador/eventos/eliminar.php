<?php include('../conexion.php');
$cn = Conectarse();
$codigo = $_GET["MultiData"];
$sql="delete from contenido where id='$codigo'";
$result=mysql_query($sql);

//para cabecera
$sql1="delete from encabezado where id='$codigo'";
$result1=mysql_query($sql1);

//para el pie
$sql2="delete from pie where id='$codigo'";
$result2=mysql_query($sql2);
?>
<html>
<head>
</head>
<link rel="stylesheet" type="text/css" href="../bruni.css">
<body topmargin="0" leftmargin="0">
<table width="100%" cellspacing="1" cellpadding="1">
<tr class="encabezados">
<td width="85%">&nbsp;</td>
<td width="15%">&nbsp;</td>
</tr>
<tr class="cuerpo1" >
<td class="menu"><div align="right">El archivo fue eliminada correctamente</div></td>
<td class="dtexto">&nbsp;</td>
</tr>
<tr class="cuerpo1">
<td height="24" valign="bottom"><div align="right"><span class="dtexto"><a href="../bandeja.php" class="c">Regresar</a></span></div></td>
<td valign="bottom"><span class="dtexto"></span></td>
</tr>
</table>
</body>
</html>