<html>
<head><title>Nuevo Evento</title>
</head>
<link rel="stylesheet" type="text/css" href="../bruni.css">
<script>
history.go(1)
function validar(){
ingresoU = this.form1.t1.value
if (ingresoU.length<1){
alert("Por favor , debe de ingresar el titulo del evento.");
this.form1.t1.focus();
return false;}
ingresoU = this.form1.t3.value
if (ingresoU.length<5){
alert("Por favor , debe de ingresar un minimo de 10 palabras para publicar en su web.");
this.form1.t3.focus();
return false;}
}
</script>
<body topmargin="0" leftmargin="0" rightmargin="0">
<form name="form1" action="insertamenu.php" method="post" onSubmit="return validar();">
<table width="100%" cellpadding="1" cellspacing="2">
<tr class="cabecera1">
<td width="1%" height="25">&nbsp;</td>
<td colspan="4" valign="bottom" class="menu"> NUEVO EVENTO </td>
</tr>
<tr class="cuerpo1">
<td>&nbsp;</td>
<td width="20%">&nbsp;</td>
<td colspan="3">&nbsp;</td>
</tr>
<tr class="cuerpo1">
<td>&nbsp;</td>
<td class="cuerponoticia">&nbsp;&nbsp;Menu1:</td>
<td colspan="3"><input name="t1" type="text" id="t1" size="80"></td>
</tr>

<tr class="cuerpo1">
<td>&nbsp;</td>
<td class="cuerponoticia">&nbsp;&nbsp;Menu2:</td>
<td colspan="3"><input name="t2" type="text" id="t2" size="80"></td>
</tr>
<tr class="cuerpo1">
<td>&nbsp;</td>
<td class="cuerponoticia">&nbsp;&nbsp;Menu3:</td>
<td colspan="3"><input name="t3" type="text" id="t3" size="80"></td>
</tr>
<tr class="cuerpo1">
<td>&nbsp;</td>
<td class="cuerponoticia">&nbsp;&nbsp;Menu4:</td>
<td colspan="3"><input name="t4" type="text" id="t4" size="80"></td>
</tr>



<tr class="cuerpo1">
<td>&nbsp;</td>
<td class="cuerponoticia">&nbsp;</td>
<td width="24%">&nbsp;</td>
<td width="13%" class="cuerponoticia"><input type="submit" name="Submit" value="Ingresar "></td>
<td width="42%">&nbsp;</td>
</tr>
</table>
</form>
</body>
</html>