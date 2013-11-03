<?php include('../../conexion.php');
$cn = Conectarse();
$cadenatexto = $_POST["cadenatexto"];
//tomo el valor de un elemento de tipo texto del formulario en este caso el codigo de la noticia
?>
<html>
<head><title>Eventos</title>
<script LANGUAGE="JavaScript">
function CargarFoto(img, ancho, alto){
derecha=(screen.width-ancho)/2;
arriba=(screen.height-alto)/2;
string="toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width="+ancho+",height="+alto+",left="+derecha+",top="+arriba+"";
fin=window.open(img,"",string);}
</script></head>
<body>
<?php
//datos del arhivo
$nombre_archivo = $_FILES['im']['name'];
$tipo_archivo = $_FILES['im']['type'];
$tamano_archivo = $_FILES['im']['size'];
//compruebo si las características del archivo son las que deseo
if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000))) { ?>
<table width="100%" cellpadding="2" cellspacing="2" >
<tr>
<td height="22" colspan="3" valign="bottom" class="menu">La extensión o el tamaño del archivo no es correcta.</td>
</tr>
<tr>
<td width="7%">&nbsp;</td>
<td width="74%" class="ampliar"> Se permiten archivos .gif o .jpg solamente </td>
<td width="19%" class="ampliar"><a href="../manager.php" class="subtituloplan">Regresar</a></td>
</tr>
<tr>
<td>&nbsp;</td>
<td class="ampliar">Se permiten archivos de 100 Kb máximo. </td>
<td class="ampliar">&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
<?php }else{
$imagen2 = $_FILES['im']['name'];
if (move_uploaded_file($_FILES['im']['tmp_name'], $imagen2)){ ?>
<table width="100%" cellpadding="2" cellspacing="2">
<tr>
<td height="22" colspan="3" valign="bottom" class="menu">Su archivo ha sido cargado correctamente.</td>
</tr>
<?php
//echo "Escribió en el campo de texto: " . $cadenatexto . "<br><br>";
$sql="update eventos set imagen='$nombre_archivo' where id='$cadenatexto'";
//echo $sql;
$result=mysql_query($sql);
?>
<tr>
<td width="7%">&nbsp;</td>
<td width="74%" class="ampliar">La foto seleccionado se mostrara con el articulo. </td>
<td width="19%"><a href="../bandeja.php" class="subtituloplan">Regresar</a></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
<?php }else{ ?>
<table width="100%" cellpadding="2" cellspacing="2">
<tr>
<td height="22" colspan="3" valign="bottom" class="menu">Ocurrió algún error al subir el fichero. No pudo guardarse.Vuelva a intentarlo</td>
</tr>
<tr>
<td width="7%">&nbsp;</td>
<td width="74%">&nbsp;</td>
<td width="19%"><a href="../manager.php" class="subtituloplan">Regresar</a></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
<?php }
}
?>
</body>
</html>