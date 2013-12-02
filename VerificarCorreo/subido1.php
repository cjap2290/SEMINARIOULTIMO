<?php include('../conexion.php'); 
//Incluir tambien el archivo class.image-resize.php en la misma carpeta donde este subido
require('class.image-resize.php');
$cn = Conectarse(); 
$fecha=date("d/m/y");
$vusuariof=$_POST["login"];
if($vusuariof==""){
	header("Location: ../index.php");}
else{
$vemailf=$_POST["t6"];
$sql="select alias from participante where alias='$vusuariof'";
$result = mysql_query($sql); ///ejecuto la consulta
if ($rsvusuario= mysql_fetch_array($result))
	{
		header("Location: ../registro.php?msg=1&user=$vusuariof");
}else{
		$sql="select email from participante where email='$vemailf'";
		$result = mysql_query($sql); ///ejecuto la consulta
		if ($rsvusuario= mysql_fetch_array($result)){
			header("Location: ../registro.php?msg=2&user=$vemailf");
		}else{
			$rsparticipa="select id,alias,distrito,edad,foto from participante  where estado=1 and activo=1 order by id desc limit 5";
			$participa = mysql_query($rsparticipa);
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
					<td class="top1" width="300" align="right"><a href="http://www.trujillolove.com" class="intnuevos">Pagina Principal</a></td>
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
						<tr><td width="10"></td><td class="titnuevo"><br>Acaban de unirse a Trujillo Love:</td></tr>
						<tr>
							<td width="10"></td>
							<td>
								<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<?php
									while ($rsparticipa=mysql_fetch_array($participa)) {
									?>
									<!-- Inicio nuevo integrante-->
									<td>
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td>
												<table border="1" bordercolor="#FFFFFF" cellpadding="0" cellspacing="0">
												<tr><td><img src="../integrantes/<?php echo $rsparticipa["foto"] ?>" width="50" height="50"></td></tr>
												</table>
											</td>
										</tr>
										<tr>
											<td><a href="../detint.php?id=<?php echo $rsparticipa["id"] ?>" class="intnuevos"><?php echo $rsparticipa["alias"] ?><br><?php echo $rsparticipa["edad"] ?> años<br><?php echo $rsparticipa["distrito"] ?></a></td>
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
										<?php 
											//datos del arhivo 
											$nombre_archivo = $_FILES['userfile']['name']; 
											$tipo_archivo = $_FILES['userfile']['type']; 
											$tamano_archivo = $_FILES['userfile']['size']; 
											
											//compruebo si las características del archivo son las que deseo 
											if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg") && ($tamano_archivo < 500000)))) { ?>
											   <table width="100%" cellpadding="2" cellspacing="2" >
											   <tr>
												 <td height="22" colspan="3" valign="bottom" class="mensajes">La extensión o el tamaño del archivo no es correcta.</td>
												 </tr>
											   <tr>
												 <td width="7%">&nbsp;</td>
												 <td width="74%" class="mensajes"> Se permiten archivos .gif o .jpg solamente</td>
												 <td width="19%" class="ampliar"><a href="javascript:history.go(-1)">Regresar</a></td>
											   </tr>
											   <tr>
												 <td>&nbsp;</td>
												 <td class="mensajes">Se permiten archivos de 500 Kb Maximo. </td>
												 <td class="ampliar">&nbsp;</td>
											   </tr>
											   <tr>
												 <td>&nbsp;</td>
												 <td>&nbsp;</td>
												 <td>&nbsp;</td>
											   </tr>
									  </table>
												<?php }else{ 
													
													//echo "Escribió en el campo de texto: " . $cadenatexto . "<br><br>"; 
													$vlogin=$_POST["login"];
													
													$vlogin  = str_replace("@", "", $vlogin);
													$vlogin  = str_replace("facebook", "", $vlogin);
													$vlogin  = str_replace("hi5", "", $vlogin); 
													$vlogin  = str_replace("hotmail", "", $vlogin);
													$vlogin  = str_replace("yahoo", "", $vlogin);
													$vlogin  = str_replace("gmail", "", $vlogin);
													$vlogin  = str_replace("latinmail", "", $vlogin);
													$vlogin  = str_replace("mixmail", "", $vlogin);
													$vlogin  = str_replace(".com", "", $vlogin);  
													$vlogin  = str_replace(".es", "", $vlogin);
													$vlogin  = str_replace(".pe", "", $vlogin);  
													$vlogin  = str_replace(".mx", "", $vlogin);
													$vlogin  = str_replace(".ar", "", $vlogin);
													$vlogin  = str_replace(".net", "", $vlogin);
													$vlogin  = str_replace(".edu", "", $vlogin);
													$vlogin  = str_replace(".tk", "", $vlogin);
													$vlogin  = str_replace("_", "", $vlogin);
													$vlogin  = str_replace("-", "", $vlogin);
													$vlogin  = str_replace("www.", "", $vlogin);
													$vlogin  = str_replace("http://", "", $vlogin);
													$vlogin  = str_replace("HOTMAIL", "", $vlogin);
													$vlogin  = str_replace("YAHOO", "", $vlogin);
													$vlogin  = str_replace("GMAIL", "", $vlogin);
													$vlogin  = str_replace("LATINMAIL", "", $vlogin);
													$vlogin  = str_replace("MIXMAIL", "", $vlogin);
													$vlogin  = str_replace(".COM", "", $vlogin);  
													$vlogin  = str_replace(".ES", "", $vlogin);
													$vlogin  = str_replace(".PE", "", $vlogin);  
													$vlogin  = str_replace(".MX", "", $vlogin);
													$vlogin  = str_replace(".AR", "", $vlogin);
													$vlogin  = str_replace(".NET", "", $vlogin);
													$vlogin  = str_replace(".EDU", "", $vlogin);
													$vlogin  = str_replace(".TK", "", $vlogin);
													$vlogin  = str_replace("WWW.", "", $vlogin);
													$vlogin  = str_replace("HTTP://", "", $vlogin);
													$vlogin  = str_replace("//", "", $vlogin);
													$vlogin  = str_replace("correo", "", $vlogin);
													$vlogin  = str_replace("email", "", $vlogin);
													$vlogin  = str_replace("mail", "", $vlogin);
													
													$vclave=$_POST["clave"];
													$vsexo=$_POST["cbosexo"];
													$vedad=$_POST["cboedad"];
													$vprovincia=$_POST["cboprovincia"];
													$vdistrito=$_POST["cbodistrito"];
													$vemail=$_POST["t6"];
													$vfloro=$_POST["floro"];
													$vimagen=$_FILES['userfile']['name'];
													$vimagen  = str_replace("á", "a", $vimagen); 
													$vimagen  = str_replace("é", "e", $vimagen);
													$vimagen  = str_replace("í", "i", $vimagen);
													$vimagen  = str_replace("ó", "o", $vimagen);
													$vimagen  = str_replace("ú", "u", $vimagen);
													$vimagen  = str_replace("Á", "A", $vimagen); 
													$vimagen  = str_replace("É", "E", $vimagen);
													$vimagen  = str_replace("Í", "I", $vimagen);
													$vimagen  = str_replace("Ó", "O", $vimagen);
													$vimagen  = str_replace("Ú", "U", $vimagen);
													$vimagense = str_replace(" ","",$vimagen); // quitar espacios
													$numero = rand(10000,100000);  // generar numero aleatorio
													$nuevo_nombre_imagen = "$numero$vimagense"; // concatenar numero aleatorio y nombre de imagen

												if (copy($_FILES['userfile']['tmp_name'], $nuevo_nombre_imagen)){ ?>
												   <table width="100%" cellpadding="2" cellspacing="2">
												   <tr>
													<td height="22" colspan="3" valign="bottom" class="menu" align="center">
														<span class="buscar1">Sus Datos se han Registrado Correctamente. Se le ha enviado un mensaje al correo electr&oacute;nico que consign&oacute; para activar su cuenta. Verifique su correo y haga clic en el enlace que ahi aparece.</span><br><br>
														<span class="buscar1">Probablemente el correo enviado se encuentre en su <strong>Bandeja de Correos no deseados</strong>. Marquelo como seguro para que pueda recibir los mensajes que le envien sus nuevos amigos. </span><br>
														<br>
														<span class="ejemplo"><b>RECUERDA !!<br>
														SI HAS SUBIDO UNA FOTO QUE ES INDEBIDA <b>O QUE NO TIENE NADA QUE VER CONTIGO</b> SERÁS BLOQUEADO Y NO PODRÁS INGRESAR A TRUJILLO LOVE.</b></span><br>
													</td>
													</tr>
													<tr>
														<td align="center"><a href="../index.php"><img src="../img/regresar.gif" width="105" height="22" border="0"></a></td>
													</tr>
												   <?php
												   	$file="$nuevo_nombre_imagen"; 
													$size=getimagesize($file); 
													$width=$size[0]; 
													$height=$size[1]; 
													//echo "Ancho".$width."<br>";
													//echo "Alto".$height."<br>";
													if ($width>$height){
														$vancho="380";
														$valto="280";
														if($width>$vancho){
															//include class file
															//require('class.image-resize.php');
															$obj = new img_opt();
															// set maximum width within wich the image should be resized
															$obj->max_width(380);
															// set maximum height within wich the image should be resized
															// for example size of the area in which image to be displayed
															$obj->max_height(280);
															$obj->image_path($file);
															// call the functio to resize the image
															$obj->image_resize();
														}
													}
													else{
														$vancho="255";
														$valto="340";
														if($width>$vancho){
															$obj = new img_opt();
															// set maximum width within wich the image should be resized
															$obj->max_width(255);
															// set maximum height within wich the image should be resized
															// for example size of the area in which image to be displayed
															$obj->max_height(340);
															$obj->image_path($file);
															// call the functio to resize the image
															$obj->image_resize();
														}	
													}
													$usumd5=md5($vusuariof);
													$sql="insert into participante(alias,usumd5,clave,sexo,edad,foto,alto,ancho,provincia,distrito,quiensoy,email,fecha) values('$vlogin','$usumd5','$vclave','$vsexo','$vedad','$nuevo_nombre_imagen','$valto','$vancho','$vprovincia','$vdistrito','$vfloro','$vemail','$fecha')";
													//echo $sql;
													$result=mysql_query($sql);
													$destinatario = $vemail;
													$asunto = "Confirma tu suscripcion a TrujilloLove.com";
													$cuerpo = "<table width='673'  border='0' cellspacing='0' cellpadding='2' bgcolor='#FDB6D4'>";
													$cuerpo = $cuerpo . "<tr><td width='669'><table width='100%'  border='0' cellspacing='0' cellpadding='0' bgcolor='#FFFFFF'>";
													$cuerpo = $cuerpo . "<tr>";
													$cuerpo = $cuerpo . "<td colspan='2'><img src='http://www.trujillohosting.net/trujillolove/img/confirmaemail.gif' width='628' height='99'></td>";
													$cuerpo = $cuerpo . "</tr>";
													$cuerpo = $cuerpo . "<tr>";
													$cuerpo = $cuerpo . "<td width='41' valign='top'><img src='http://www.trujillohosting.net/trujillolove/img/ladoi.gif'></td>";
													$cuerpo = $cuerpo . "<td width='100%' valign='top'>";
													$cuerpo = $cuerpo . "<table border='0' cellpadding='10' cellspacing='0' width='100%'>";
													$cuerpo = $cuerpo . "<tr>";
													$cuerpo = $cuerpo . "<td colspan='2'><img src='http://www.trujillohosting.net/trujillolove/integrantes/".$nuevo_nombre_imagen."' width='128' height='70'></td>";
													$cuerpo = $cuerpo . "<td><font face='verdana' size='3' color='#C52233'><b>Hola: ".$vlogin."<br><br>";
													$cuerpo = $cuerpo . "</b></font><font face='verdana' size='3' color='#000000'>Te informamos que debes confirmar tu correo haciendo clic en el enlace de mas abajo, para Activar tu cuenta en TrujilloLove.<br>";
													$cuerpo = $cuerpo . "</font><br><br><font face='verdana' size='2' color='#000000'><a href='http://www.trujillohosting.net/trujillolove/verificar/verifica.php?verify=".$usumd5."'>http://www.trujillohosting.net/trujillolove/verificar/verifica.php?verify=".$usumd5."</a> <br><br>";
													$cuerpo = $cuerpo . "Si el vínculo no funciona, copie y peguelo en su navegador, recibir&aacute;s luego un correo confirmando tu suscripci&oacute;n e indicando tus datos de ingreso. </font></td>";
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
												   ?>
												  
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
												  
											   </table>
												<?php   } 
											} 
											?>
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
						<tr><td><a href="redirect.php?ban=10" target="_self"><img src="../banners/logo001.gif" width="119" height="200" border="0"></a></td>
						</tr>
						<tr><td height="3"></td></tr>
						<tr><td><a href="redirect.php?ban=7" target="_blank"><img src="../banners/ucv.gif" border="0"></a></td></tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>
		<tr><td colspan="2" class="copy">La mayor y mejor Web de Trujillo para conocer gente</td></tr>
		<tr><td height="1" bgcolor="#FFFFFF"></td></tr>
		<tr>
			<td colspan="2" class="copy1"><?php
				include("../class.online.php");  
				$enlinea = new Usuariosenlinea (); 
				$enlinea -> enlinea (); 
				?> | Copyright 2009 - www.TrujilloLove.com - Power by <a href="http://www.trujillohosting.net" target="_blank" class="intnuevos">TrujilloHosting.Net</a>
			</td>
		</tr></table>
	</td>
</tr>
</table>
</center>
</body>
</html>
<?php }}}?>