<?php include('../conexion.php'); 
$cn = Conectarse();	
$rsparticipa="select id,alias,distrito,edad,foto from participante  where estado=1 and activo='1' order by id desc limit 5";
$participa = mysql_query($rsparticipa);
?>
<html>
<head>
<LINK REL="SHORTCUT ICON" HREF="icono/trulove.ico">
<title>Trujillo Love - Tu Punto de Encuentro</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
<script>
function isEmail(e) {   
ok = "1234567890qwertyuiop[]asdfghjklzxcvbnm.@-_QWERTYUIOPASDFGHJKLZXCVBNM";
for(i=0; i < e.length ;i++){
   if(ok.indexOf(e.charAt(i))<0){ 
            return (false);       }	
    } 
    re = /(@.*@)|(\.\.)|(^\.)|(^@)|(@$)|(\.$)|(@\.)/;
    re_two = /^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (!e.match(re) && e.match(re_two)) {
        return (-1);    }
}
</script>
<script>
 function validar(){
 ingresoU = this.form1.login.value
	if (ingresoU.length==0){
	alert("Por favor , debe de ingresar un nombre de usuario.");
	this.form1.login.focus();
	return false;}
	
	clave1 = this.form1.clave.value
	if (clave1.length==0){
	alert("Por favor , debe de ingresar una contraseña.");
	this.form1.clave.focus();
	return false;}
	
	clave1 = this.form1.clave.value
	if (clave1.length<6){
	alert("Su contraseña debe tener como mínimo 6 y como máximo 12 caracteres");
	this.form1.clave.focus();
	return false;}
	
	clave1 = this.form1.clave.value
	if (clave1.length>12){
	alert("Su contraseña debe tener como máximo 12 caracteres");
	this.form1.clave.focus();
	return false;}
	
	clave2 = this.form1.clave1.value
	if (clave2.length==0){
	alert("Por favor , vuelva a escribir su contraseña.");
	this.form1.clave1.focus();
	return false;}
	
	if (clave1!=clave2){
	alert("Las contraseñas que ha escrito NO coinciden . \n Por favor verifíquelas.");
	this.form1.clave.focus();
	return false;}
	
	 if (!(isEmail(this.form1.t6.value))) {
        alert("Email no valido,por favor corrija su mail");
        this.form1.t6.focus();
        this.form1.t6.select();   
	 return false;}	
	
	ingresoU = this.form1.floro.value
	if (ingresoU.length==0){
	alert("Por favor , debe de ingresar su descripción personal");
	this.form1.floro.focus();
	return false;}
	
	ingresoU = this.form1.floro.value
	if (ingresoU.length<20){
	alert("Su descripción personal debe tener por lo menos 20 caracteres");
	this.form1.floro.focus();
	return false;}
	
	ingresoU = this.form1.userfile.value
	if (ingresoU.length==0){
	alert("Debe subir una foto");
	this.form1.userfile.focus();
	return false;}
	
	}
</script>
</head>
<body topmargin="0" leftmargin="0">
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
					<td width="25" height="25" class="top2"></td>
					<td class="top2" width="337"  align="right">
						<table border="0" cellpadding="0" cellspacing="0" width="100%" class="top2">
						<form action="vusuario.php" method="post" name="formuser">
						<tr>
							<td>Usuario: <input type="text" name="usuario" size="12"></td>
							<td>Clave: <input type="password" name="clave" size="12"></td>
							<td></td>
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
						  <param name="movie" value="swf/logo.swf">
						  <param name="menu" value="false">
						</object>
					</td>
				</tr>
				<tr>
					<td width="448" height="145" background="">
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
												<tr><td><img src="integrantes/<?php echo $rsparticipa["foto"] ?>" width="50" height="50"></td></tr>
												</table>
											</td>
										</tr>
										<tr>
											<td><a href="detint.php?id=<?php echo $rsparticipa["id"] ?>" class="intnuevos"><?php echo $rsparticipa["alias"] ?><br><?php echo $rsparticipa["edad"] ?> años<br><?php echo $rsparticipa["distrito"] ?></a></td>
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
			<td valign="top"><script  type="text/javascript" src="img.js"></script></td>
		</tr>
		<tr>
			<td colspan="2">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td valign="top" width="45" background="img/fregistro.gif"><img src="img/bregistro.gif" width="42" height="45"></td>
					<td width="90%" valign="top">
						<table border="0" cellpadding="10" cellspacing="0" width="100%">
						<tr>
							
							<td><form action="subido1.php" name="form1" method="post" enctype="multipart/form-data" onSubmit="return validar();">
								<table border="0" cellpadding="5" cellspacing="0" width="100%" class="buscar">
								<tr>
									<td colspan="2">
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td><img src="img/nregistro.gif" width="292" height="27"></td>
											<td align="center"><a href="index.php"><img src="img/regresar.gif" width="105" height="22" border="0"></a></td>
										</tr>
										</table>
									</td>
								</tr>
								<tr><td height="20" colspan="2"></td>
								</tr>
								<?php
								$vmsg=$_GET["msg"];
								$vuser=$_GET["user"];
								?>
								<?php if ($vmsg==1){ ?>
								<tr><td height="20" colspan="2">
								<span class="ejemplo">El nombre de usuario "<b><?php echo $vuser?></b>" que ha elegido ya está en uso. Por favor elija otro.</span>			
								</td></tr>
								<tr><td height="20" colspan="2"></td></tr>
								<?php }?>
								<?php if ($vmsg==2){ ?>
								<tr><td height="20" colspan="2">
								<span class="ejemplo">El e-mail "<b><?php echo $vuser?></b>" que ha ingresado ya está en uso. Por favor ingrese otro.</span>			
								</td></tr>
								<tr><td height="20" colspan="2"></td></tr>
								<?php }?>
								<tr><td width="35%"><b><span class="ejemplo">1.</span>  Usuario:</b></td>
								<td width="65%"><input type="text" size="15" name="login"><span class="ejemplo"> &nbsp;Ejemplo: ricky99</span></td></tr>
								<tr><td width="35%"><b><span class="ejemplo">2.</span> Contraseña:</b></td><td width="65%"><input type="password" size="15" name="clave" maxlength="12"><span class="ejemplo"> &nbsp;Mín. 6 max. 12 caracteres</span></td></tr>
								<tr><td width="35%"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Repetir Contraseña:</b></td><td width="65%"><input type="password" size="15" name="clave1" maxlength="12"></td></tr>
								<tr>
									<td colspan="2" width="100%">
										<table border="0" cellpadding="3" width="100%" cellspacing="0" class="buscar">
										<tr>
											<td width="5%"><b><span class="ejemplo">3.</span> Sexo:</b></td>
											<td width="11%"><select name="cbosexo"><option value="Hombre">Hombre</option><option value="Mujer">Mujer</option></select></td>
											<td width="5%"><b><span class="ejemplo">4.</span> Edad:</b></td>
											<td width="25%"><select name="cboedad">
												<?php 
												   for($i=18 ; $i<100 ; $i++) 
												   {
												 ?> 
													  <option value="<?php echo $i?>"><?php echo $i?> años</option>
												<?php
												   } 
												?> 
											</select>
											</td>
										</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td><b><span class="ejemplo">5.</span> Localidad</b></td>
									<td>
										<select name="cboprovincia">
										<option value="Trujillo">Trujillo</option>
										</select>&nbsp;
										<select name="cbodistrito">							
										<option value="El Porvenir">El Porvenir</option>
										<option value="Huanchaco">Huanchaco</option>
										<option value="La Esperanza">La Esperanza</option>
										<option value="Laredo">Laredo</option>
										<option value="Moche">Moche</option>
										<option value="Paiján">Paiján</option>
										<option value="Salaverry">Salaverry</option>
										<option value="Simbal">Simbal</option>
										<option value="Stgo. de Cao">S. de Cao</option>
										<option value="Trujillo" selected>Trujillo</option>
										<option value="V.L. Herrera">V. Larco Herrera</option>
										<option value="Virú">Virú</option>						
										</select>
									</td>
								</tr>
								<tr>
									<td><b><span class="ejemplo">6.</span> E-mail</b></td>
									<td><input type="text" size="30" name="t6"></td>
								</tr>
								<tr><td><b><span class="ejemplo">7.</span> Descríbete como eres</b></td><td><textarea name="floro" cols="40" rows="5"></textarea></td></tr>
								<tr><td valign="top">
									<b><span class="ejemplo">8.</span> Sube tu Foto en formato (.gif , .jpg) de tu Computadora</b></td><td><input name="userfile" type="file" size="25"><br><br>
									<span class="ejemplo"> Recuerda que en la foto debes estar identificado, <b>en caso de que en la foto que deseas subir estés con varias personas debes señalarte con una flecha.</b> No puedes subir pornografía, fotografías de gente famosa ni  fotografías registradas. Debes tener más de 18 años para poder registrarte.</span>
								</td></tr>
								<tr>
								  <td colspan="2" height="20">&nbsp;</td>
								</tr>
								<tr><td align="center" colspan="2"><input type="submit" value="SOY MAYOR DE 18 AÑOS Y DESEO REGISTRARME"></td></tr>
								</table></form>
							</td>
						</tr>
						</table>
					</td>
					
					<!-- Fin de Inscripción -->
					<td valign="top" align="right">
						<table border="0" cellpadding="2" cellspacing="0" width="100%">
						<tr><td><a href="redirect.php?ban=10" target="_self"><img src="banners/logo001.gif" width="119" height="200" border="0"></a></td>
						</tr>
						<tr><td height="3"></td></tr>
						<tr><td><a href="redirect.php?ban=7" target="_blank"><img src="banners/ucv.gif" border="0"></a></td></tr>
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
				include("class.online.php");  
				$enlinea = new Usuariosenlinea (); 
				$enlinea -> enlinea (); 
				?> | Copyright 2009 - www.TrujilloLove.com - Power by <a href="http://www.trujillohosting.net" target="_blank" class="intnuevos">TrujilloHosting.Net</a>
			</td>
		</tr></table>
	</td>
</tr>
</table>
</center>
<?php
$vmsg=$_GET["msg"];
$vuser=$_GET["user"];
?>
<?php if ($vmsg==1){ ?>
	<script>
	this.form1.login.focus();
	alert ("El nombre de usuario que ha eligido ya está en uso. Por favor elija otro.");
	</script>
<?php }?>
<?php if ($vmsg==2){ ?>
	<script>
	this.form1.login.focus();
	alert ("El Email que ha ingresado ya está en uso. Por favor ingrese otro.");
	</script>
<?php }?>
</center>
<script type="text/javascript" src="ieupdate.js"></script>
<?php
$error=$_GET['error'];
if ($error==101){
?>
<?php }
if ($error==105){
?>
<script>
alert("LA LLAVE DE CONFIRMACION NO ES LA CORRECTA, Intenta Registrarte nuevamente");
</script>
<?php }?>
</body>
</html>
