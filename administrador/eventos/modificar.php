<?php include('../conexion.php');
$cn = Conectarse();
$codigo = $_GET["Modee"];



//para cabecera
$sql1="select * from encabezado where id='$codigo'";
$result1=mysql_query($sql1);
$row= mysql_fetch_array($result1);

//para el pie
$sql2="select * from pie where id='$codigo'";
$result2=mysql_query($sql2);
$row1= mysql_fetch_array($result2);


//para el contenido
$sql3="select * from contenido where id='$codigo'";
$result3=mysql_query($sql2);
$row2= mysql_fetch_array($result3);

//para la noticia
$sql4="select * from noticias where id='$codigo'";
$result4=mysql_query($sql2);
$row3= mysql_fetch_array($result4);
?>
<html>
<head><title>Modificar Evento</title>
</head>
<link rel="stylesheet" type="text/css" href="../bruni.css">
<script>
history.go(1)
function validar(){
ingresoU = this.form1.t1.value
if (ingresoU.length<1){
alert("Por favor , debe de ingresar el titulo de la publicacion.");
this.form1.t1.focus();
return false;}
ingresoU = this.form1.t3.value
if (ingresoU.length<10){
alert("Por favor , debe de ingresar un minimo de 10 palabras para publicar en su web.");
this.form1.t3.focus();
return false;}
}
</script>
<body topmargin="0" leftmargin="0" rightmargin="0">
<form name="form1" action="update.php" method="post" onSubmit="return validar();">
<table width="100%" cellpadding="1" cellspacing="2">
<tr class="cabecera1">
<td width="1%" height="25">&nbsp;</td>
<td colspan="4" valign="bottom" class="menu"> MODIFICAR EVENTO </td>
</tr>
<tr class="cuerpo1">
<td>&nbsp;</td>
<td width="11%">&nbsp;</td>
<td colspan="3">&nbsp;</td>
</tr>
<tr class="cuerpo1">
<td>&nbsp;</td>
<td class="cuerponoticia">&nbsp;Nombre</td>
<td colspan="3"><input name="t1" type="text" id="t1" value="<?php echo $row["titulo"] ?>" size="80"> </td>
</tr>
<tr class="cuerpo1">
<td>&nbsp;</td>
<td valign="top" class="cuerponoticia">&nbsp;Descripcion</td>
<td colspan="3"><textarea name="t3" cols="90" rows="15" id="t3"><?php echo $row["cuerpo"] ?></textarea></td>
</tr>
<tr class="cuerpo1">
<td>&nbsp;</td>
<td class="cuerponoticia">Mostrar</td>
<td colspan="3"><input name="t2" type="text" id="t2" value="<?php echo $row["mostrar"] ?>" size="2">
(1 = Si / 0 = No) </td>
</tr>
<tr class="cuerpo1">
<td>&nbsp;</td>
<td class="cuerponoticia">&nbsp;</td>
<td width="33%"><input name="t4" type="hidden" value="<?php echo $row["id"] ?>" size="80"></td>
<td width="13%" class="cuerponoticia"><input type="submit" name="Submit" value="Actualizar"></td>
<td width="42%">&nbsp;</td>
</tr>
<tr class="cuerpo1">
<td colspan="5"><div align="center">
</div></td>
</tr>
</table>
</form>
<script>
history.go(1)
</script>
</body>
</html>