<?php include('../../conexion.php');
$cn = Conectarse();
$codigo = $_GET["Modee"];
$sql="select * from contenido where id='$codigo'";
//echo $sql;
$result=mysql_query($sql);
$row= mysql_fetch_array($result)
?>
<html>
<head>
<script LANGUAGE="JavaScript">
function CargarFoto(img, ancho, alto){
derecha=(screen.width-ancho)/2;
arriba=(screen.height-alto)/2;
string="toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width="+ancho+",height="+alto+",left="+derecha+",top="+arriba+"";
fin=window.open(img,"",string);}
</script></head>
<link rel="stylesheet" type="text/css" href="../../bruni.css">
<body topmargin="0" leftmargin="0">
<form action="subida.php" method="post" enctype='multipart/form-data'>
<table width="100%" cellspacing="0" cellpadding="0">
<tr class="menu">
<td width="9%">&nbsp;</td>
<td width="58%">&nbsp;</td>
<td width="33%">&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><span class="titulonoticia">Evento:</span><br>
<span class="cuerponoticia"><?php echo $row["titulo"] ?></b><br>
<input type="hidden" name="cadenatexto" size="20" maxlength="100" value="<?php echo $row["id"] ?>">
</span>
<br>
<br>
<br> </td>
<td><a href="../manager.php" class="subtituloplan">Regresar</a></td>
</tr>
<tr>
<td>&nbsp;</td>
<td class="cuerponoticia">Ubique por favor el archivo tipo jpg, gif a mostrar en el Evento </td>
<td><input type="hidden" name="MAX_FILE_SIZE" value="100000"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="im" type="file" class="cuerponoticia" id="im" size="50"></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="submit" type="submit" value="Enviar"></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td rowspan="2"><img src="<?php echo $row["imagen"] ?>" width="126" height="80" border="2"></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
</form>
</body>
</html>