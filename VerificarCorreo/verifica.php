<?php include('../conexion.php'); 
$cn = Conectarse(); 
$verify=$_GET['verify'];

$sql="select * from participante where trim(usumd5)='$verify'";
$result = mysql_query($sql); ///ejecuto la consulta
//echo $sql;
if ($row= mysql_fetch_array($result)){
	$vusuariof=$row['alias'];
	$vclave=$row['clave'];
	$usumd5=md5($row['clave']);
	$vemail=$row['email'];
	$vimagen=$row['foto'];
	//$vancho=$row['ancho'];
	//$valto=$row['alto'];
	
	$sql1="UPDATE participante set usumd5='$usumd5',activo='1' where alias='$vusuariof'";
	$result=mysql_query($sql1);
	//echo $sql1;
	$destinatario = $vemail;
	$asunto = "Suscripcion Confirmada a TrujilloLove.com";
	$cuerpo = "<table width='673'  border='0' cellspacing='0' cellpadding='2' bgcolor='#FDB6D4'>";
	$cuerpo = $cuerpo . "<tr><td width='669'><table width='100%'  border='0' cellspacing='0' cellpadding='0' bgcolor='#FFFFFF'>";
	$cuerpo = $cuerpo . "<tr>";
	$cuerpo = $cuerpo . "<td colspan='2'><img src='http://www.trujillohosting.net/trujillolove/img/acceso.gif' width='628' height='99'></td>";
	$cuerpo = $cuerpo . "</tr>";
	$cuerpo = $cuerpo . "<tr>";
	$cuerpo = $cuerpo . "<td width='41' valign='top'><img src='http://www.trujillohosting.net/trujillolove/img/ladoi.gif'></td>";
	$cuerpo = $cuerpo . "<td width='100%' valign='top'>";
	$cuerpo = $cuerpo . "<table border='0' cellpadding='10' cellspacing='0' width='100%'>";
	$cuerpo = $cuerpo . "<tr>";
	$cuerpo = $cuerpo . "<td colspan='2'><img src='http://www.trujillohosting.net/trujillolove/integrantes/".$vimagen."' width='128' height='70'></td>";
	$cuerpo = $cuerpo . "<td><font face='verdana' size='3' color='#C52233'><b>Hola: ".$vusuariof."<br><br>";
	$cuerpo = $cuerpo . "</b></font><font face='verdana' size='3' color='#000000'>Tu cuenta a sido activada en TrujilloLove.<br>";
	$cuerpo = $cuerpo . "</font><br><br><font face='verdana' size='2' color='#000000'><b>Tu Usuario es:</b>".$vusuariof."<br><br>";
	$cuerpo = $cuerpo . "<b>Tu Clave es:</b>".$vclave."<br><br>";	
	$cuerpo = $cuerpo . "Trata de guardar este correo para posteriores accesos. Ahora ya puedes disfrutar de <a href='http://www.trujillohosting.net/trujillolove' target='_Blank'>www.trujillohosting.net/trujillolove</a> Tu Punto de Encuentro</font></td>";
	$cuerpo = $cuerpo . "</tr>";
	$cuerpo = $cuerpo . "</table>";
	$cuerpo = $cuerpo . "</td>";
	$cuerpo = $cuerpo . "</tr>";
	$cuerpo = $cuerpo . "</table></td></tr></table></body></html>";
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html;charset=iso-8859-1\r\n";
	//dirección del remitente 
	$headers .= "From: Trujillo Love <mensajes@trujillolove.com>"; 
	mail($destinatario,$asunto,$cuerpo,$headers);
	
//Aviso de Activacion de Nuevo usuario a los creadores
$destinatario1 = 'yosip1@hotmail.com, carlodem7@hotmail.com';
$asunto = "Nuevo Usuario a confirmado cuenta en TrujilloLove.com";
$cuerpo = "<html><head><title>Confirmacion de Nuevo Usuario</title></head><body>";
$cuerpo = $cuerpo . "<table width='100%'  border='0' cellspacing='2' cellpadding='2'>
<tr>
  <td align='center'><font face='verdana' size='2'>
<b>Nuevo Usuario Confirmado</b></font></td>
</tr><tr><td>&nbsp;</td></tr>
<tr>
  <td align='justify'><p>Un Nuevo Usuario ha confirmado su registro en la base de datos de trujillo.love</p></td></tr>
</table></body></html></html>";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html;charset=iso-8859-1\r\n";
$headers .= "From: Trujillo Love <mensajes@trujillolove.com>"; 
mail($destinatario,$asunto,$cuerpo,$headers);
	
?>
<html>
<head>
<title>Trujillo Love - Tu Punto de Encuentro</title>
<link rel="stylesheet" type="text/css" href="../estilo.css">
<SCRIPT LANGUAGE="JavaScript">
	function detectKey() {
	if(window.event && window.event.keyCode == 116){
	window.event.keyCode = 0;
	return false;}
	}
	document.onkeydown = detectKey;
	document.oncontextmenu = function(){return false}
</script>
</head>
<body topmargin="0" leftmargin="0" background="../img/fgeneral.gif">
<center>
<table border="0" cellpadding="0" cellspacing="0" width="776" bgcolor="#FFFFFF">
<tr>
	<td>
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td colspan="2">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr><td height="1" bgcolor="#FFFFFF"></td></tr>
				<tr>
					<td class="top1" width="300" align="right">Datos de Acceso:</td>
					<td width="25" height="25" class="top2"><img src="../img/bcentral.gif" width="25" height="25"></td>
					<td class="top2" width="337"  align="right">
						<table border="0" cellpadding="0" cellspacing="0" width="100%" class="top2">
						<form action="../vusuario.php" method="post" name="formuser">
						<tr>
							<td>Usuario: <input type="text" name="usuario" size="12"></td>
							<td>Clave: <input type="password" name="clave" size="12"></td>
							<td><input type="image" src="../img/ok.gif"></td>
						</tr>
						</form>
						</table>
					</td>
				</tr>
				<tr><td height="1" bgcolor="#FFFFFF"></td></tr>
				</table>
			</td>
		</tr>
		<tr>
			<td valign="top">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td>
						<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
						  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,79,0"
						  id="inscripcion" width="448" height="99">
						  <param name="movie" value="../swf/logo.swf">
						  <param name="menu" value="false">
						</object>
					</td>
				</tr>
				<tr>
					<td width="448" height="145" background="../img/fultimos.gif" valign="top">
						<table border="0" cellpadding="5" cellspacing="0" width="100%">
						<tr><td width="10"></td><td width="420" class="titnuevo"><br>
						  Acaban de unirse a Trujillo Love:</td></tr>
						<tr>
							<td width="10"></td>
							<td>
								<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<?php
									$rsparticipa1="select id,alias,distrito,edad,foto from participante  where estado=1 and activo=1 order by id desc limit 5";
									$participa1 = mysql_query($rsparticipa1);
									while ($rsparticipa1=mysql_fetch_array($participa1)) {
									?>
									<!-- Inicio nuevo integrante-->
									<td>
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td>
												<table border="1" bordercolor="#FFFFFF" cellpadding="0" cellspacing="0">
												<tr><td><img src="../integrantes/<?php echo $rsparticipa1["foto"] ?>" width="50" height="50"></td></tr>
												</table>
											</td>
										</tr>
										<tr>
											<td><a href="../detint.php?id=<?php echo $rsparticipa1["id"] ?>" class="intnuevos"><?php echo $rsparticipa1["alias"] ?><br><?php echo $rsparticipa1["edad"] ?> años<br><?php echo $rsparticipa1["distrito"] ?></a></td>
										</tr>
										</table>
									</td>
									<!-- Fin nuevo integrante-->
									<?php } ?>
								</tr>
								</table>
							</td>
						</tr>
					  </table>
					</td>
				</tr>
				</table>
			</td>
			<td valign="top"><script  type="text/javascript" src="..img.js"></script></td>
		</tr>
		 <tr>
			<td colspan="2">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td valign="top" width="45" background="../img/fregistro.gif"><img src="../img/bregistro.gif"></td>
					<td width="90%" valign="top">
						<table border="0" cellpadding="10" cellspacing="0" width="100%">
						<tr>
							
							<td>
								<table border="0" cellpadding="5" cellspacing="0" width="100%" class="buscar">
								<tr>
									<td>
												   <table width="100%" cellpadding="2" cellspacing="2">
												   <tr>
													<td height="22" colspan="3" valign="bottom" class="menu" align="center">
														<span class="buscar1">Sus Datos se han Registrado Correctamente, se ha enviado un correo a tu cuenta con tus datos de ingreso. Ahora escribe tu usuario y clave y disfruta de <b>Trujillo Love</b></span><br>
														<br>
														<span class="buscar">
														<b>Tus Datos de Aceso a Trujillo Love son:</b><br><br>
														<b>Usuario:</b> <?php echo $vusuariof?><br><br>
														<b>Clave:</b> <?php echo $vclave?><br><br></span>
														<table border="0" cellpadding="10" cellspacing="0" width="50%" class="top2">
														<form action="../vusuario.php" method="post" name="formuser">
														<tr>
														  <td>Usuario: &nbsp;
														    <input type="text" name="usuario" size="12"></td>
														 </tr>
														 <tr>
															<td>Clave:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															  <input type="password" name="clave" size="12"></td>
														 </tr>
														 <tr>
															<td><input type="image" src="../img/ok.gif"></td>
														</tr>
														</form>
														</table>													</td>
										</tr>
								      </table>
									</td>
								</tr>
								</table>
							</td>
						</tr>
						</table>
					</td>
					
					<!-- Fin de Inscripción -->
					<td valign="top" align="right">
						<table border="0" cellpadding="2" cellspacing="0" width="100%">
						<tr><td><a href="../redirect.php?ban=5" target="_blank"><img src="../banners/brahma.gif" border="0"></a></td></tr>
						<tr><td height="3"></td></tr>
						<tr><td><a href="../redirect.php?ban=4" target="_blank"><img src="../banners/pilsen.gif" border="0"></a></td></tr>
						<tr><td height="3"></td></tr>
						<tr><td><a href="../redirect.php?ban=7" target="_blank"><img src="../banners/ucv.gif" border="0"></a></td></tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>
		<tr><td colspan="2" class="copy">La mayor Web de Trujillo para conocer gente</td></tr>
		<tr><td height="1" bgcolor="#FFFFFF"></td></tr>
		<tr><td colspan="2" class="copy1">Copyright 2009 - www.TrujilloLove.com - Power by <a href="http://www.trujillohosting.net" target="_blank" class="intnuevos">TrujilloHosting.Net</a></td></tr>
		</table>
	</td>
</tr>
</table>
</center>
</body>
</html>
<?php }else{
	header("Location: ../index.php?error=102");
} ?>