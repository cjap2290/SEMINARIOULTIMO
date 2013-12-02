<?php include('../conexion.php');
$cn = Conectarse();
$codigo = $_GET["Modee"];

//PARA EL CONTENIDO
$sql="update contenido set principal='0'";
$sql2="update contenido set principal='1' where id='$codigo'";
$result=mysql_query($sql);
$result2=mysql_query($sql2);






?>
<html>
<head>
<title>Establecer como principal un Evento</title></head>
<link rel="stylesheet" type="text/css" href="../bruni.css">
<body topmargin="0" leftmargin="0">
<table width="100%" cellspacing="1" cellpadding="1">
<tr class="encabezados">
<td width="85%">&nbsp;</td>
<td width="15%">&nbsp;</td>
</tr>
<tr class="cuerpo1" >
<td class="menu"><div align="right">El Evento fue establecido como principal en su pagina web </div></td>
<td class="dtexto">&nbsp;</td>
</tr>
<tr class="cuerpo1">
<td height="26" valign="bottom"><div align="right"><span class="dtexto"><a href="managercontenido.php" class="b">Regresar</a></span></div></td>
<td valign="bottom">&nbsp;</td>
</tr>
</table>
</body>
</html>