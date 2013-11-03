<html>
<head>
<title>Menu</title>
</head>
<script>
history.go(1)
</script>
<link rel="stylesheet" type="text/css" href="bruni.css">
<body topmargin="0" leftmargin="0" >

<?php 
SESSION_START();
if($_SESSION['iduser']=="cjap90")
{ ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" >
<tr bgcolor="white" >
<td >&nbsp;</td>
</tr>
<tr>
<td height="40" class="bloquemenu"><a href="bandeja.php" class="b" target="bandeja"><img src="imagenes/item.gif" border="0">Principal</a></td>
</tr>

<tr><td height="10"></td></tr>
<tr >
<td height="40" class="bloquemenu"><a href="eventos/managercabecera.php" class="b" target="bandeja"><img src="imagenes/item.gif" border="0">Cabecera</a></td>
</tr>

<tr><td height="10"></td></tr>
<tr >
<td height="40" class="bloquemenu"><a href="eventos/managercontenido.php" class="b" target="bandeja"><img src="imagenes/item.gif" border="0">Contenido</a></td>
</tr>

<tr><td height="10"></td></tr>
<tr >
<td height="40" class="bloquemenu"><a href="eventos/managerpie.php" class="b" target="bandeja"><img src="imagenes/item.gif" border="0">Pie</a></td>
</tr>

<tr><td height="10"></td></tr>
<tr >
<td height="40" class="bloquemenu"><a href="eventos/managernoticia.php" class="b" target="bandeja"><img src="imagenes/item.gif" border="0">Noticia</a></td>
</tr>

<tr><td height="10"></td></tr>
<tr >
<td height="40" class="bloquemenu"><a href="eventos/registrar.php" class="b" target="bandeja"><img src="imagenes/item.gif" border="0">Registrar</a></td>
</tr>

<tr><td height="10"></td></tr>
<tr >
<td height="40" class="bloquemenu"><a href="cerrar.php" class="b" target="index" ><img src="imagenes/item.gif" border="0">Cerrar</a></td>
</tr>



</table>
<?php } 

else{?>







<table width="100%" border="0" cellpadding="0" cellspacing="0" >
<tr bgcolor="white" >
<td >&nbsp;</td>
</tr>
<tr>
<td height="40" class="bloquemenu"><a href="bandeja.php" class="b" target="bandeja"><img src="imagenes/item.gif" border="0">Principal</a></td>
</tr>

<tr><td height="10"></td></tr>
<tr >
<td height="40" class="bloquemenu"><a href="eventos/managercabecera.php" class="b" target="bandeja"><img src="imagenes/item.gif" border="0">Cabecera</a></td>
</tr>

<tr><td height="10"></td></tr>
<tr >
<td height="40" class="bloquemenu"><a href="eventos/managercontenido.php" class="b" target="bandeja"><img src="imagenes/item.gif" border="0">Contenido</a></td>
</tr>

<tr><td height="10"></td></tr>
<tr >
<td height="40" class="bloquemenu"><a href="eventos/managerpie.php" class="b" target="bandeja"><img src="imagenes/item.gif" border="0">Pie</a></td>
</tr>

<tr><td height="10"></td></tr>
<tr >
<td height="40" class="bloquemenu"><a href="cerrar.php" class="b" target="index"><img src="imagenes/item.gif" border="0">Cerrar</a></td>
</tr>
</table>  

<?php } ?>

</body>
</html>