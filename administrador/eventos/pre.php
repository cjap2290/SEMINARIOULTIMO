<?php
$codigo=$_GET["Modee"];
?>
<html>
<head>
<title>Confirmacion de eliminacion</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../bruni.css">
</head>
<body topmargin="0" leftmargin="0">
<table width="100%" border="0" cellspacing="1" cellpadding="1">
<tr>
<td height="83">
<table width="100%" border="0" cellspacing="0" cellpadding="0" height="51%">
<tr class="menu">
<td width="9%" height="47">&nbsp;</td>
<td width="82%" >CONFIRMACION DE ELIMINACION DEL EVENTO </td>
<td width="9%" height="47">&nbsp;</td>
</tr>
<tr class="actualidad">
<td height="18"></td>
<td valign="bottom">Esta seguro que desea eliminar el archivo que ha seleccionado.<br></td>
<td> </td>
</tr>
</table></td>
</tr>
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
<tr class="cuerpo1">
<td width="47%" height="28" align="right"></td>
<td width="10%" align="left"><a href="eliminar.php?MultiData=<?php echo $codigo ?>" class="c"> Eliminar </a> </td>
<td width="3%" align="left"></td>
<td width="3%" align="left"> <a href="../bandeja.php" class="c"> Regresar </a></td>
<td width="37%">&nbsp;</td>
</tr>
</table></td>
</tr>
</table>
</body>
</html>