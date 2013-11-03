

<!--ESTO FORMA PARTE DEL CAPTCHA ANIMADO DE ARE YOU HUMAN-->
			<?php
// Instantiate the AYAH object. You need to instantiate the AYAH object
// on each page that is using PlayThru.
require_once("captcha1/ayah.php");
$ayah = new AYAH();
// Check to see if the user has submitted the form. You will need to replace
// 'my_submit_button_name' with the name of your 'Submit' button.
if (array_key_exists('my_submit_button_name', $_POST))
{
          // Use the AYAH object to see if the user passed or failed the game.
          $score = $ayah->scoreResult();
          if ($score)
          {
                     // This happens if the user passes the game. In this case,
                     // we're just displaying a congratulatory message.
                     echo "Felicidades";
          }
          else
          {
                // This happens if the user does not pass the game.
                     echo "Por Favor intentalo de nuevo";
          }
}
?>

<!--FIN CODIGO PHP CAPTCHA ANIMADO-->

<!DOCTYPE HTML>
<html>
	<head>
		<title>CABLE MAXUY</title>
		<link type="image/x-icon" href="images/favicon.ico" rel="icon" />
		<link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />
		<link rel=stylesheet href="css/estilo.css" type="text/css" />
		
		<link rel="stylesheet" href="CSS3 Menu_files/css3menu4/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
		
		
<script type="text/javascript">

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

//Begin
function checkFields() {
missinginfo = "";
if (document.form.nombre.value == "") {
missinginfo += "\n     -  Nombre";
}

if ((document.form.email.value == "") || (document.form.email.value.indexOf('@') == -1) || (document.form.email.value.indexOf('.') == -1)) {
missinginfo += "\n     -  Direccion de correo";
}

if(document.form.comentario.value == "") {
missinginfo += "\n     -  comentarios";
}


if (missinginfo != "") {
missinginfo ="_____________________________\n" +
"Te ha faltado introducir los siguientes datos:\n" +
missinginfo + "\n_____________________________" +
"\n Por favor pulsa enter, rellena los datos y prueba de nuevo";
alert(missinginfo);


return false;
}
else 



alert('POR FAVOR ACIERTE EL SIGUIENTE CAPTCHA ANIMADO');


return true;
}


//  End -->
</script>


	</head>
	<body>
	<?php
include("conexion.php");
$cn = conectarse();

//Para el encabezado
$rsencabezado="select * from encabezado where principal=1";
$encabezado=mysql_query($rsencabezado);
$rsencabezado=mysql_fetch_array($encabezado);



//PARA EL PIE DE PAGINA
$rspie="select * from pie where principal=1";
$pie=mysql_query($rspie);
$rspie=mysql_fetch_array($pie);	
		






?>
		
		<div id="principal">
		<div id="cabecera">
											
				<h1><?php echo $rsencabezado["titulo"]?></h1> - 
				<h2><?php echo $rsencabezado["subtitulo"]?></h2>	
						
		</div>
		</br>
		
		
		<ul id="css3menu4" class="topmenu">
	<li class="topfirst"><a href="index.php" style="height:26px;line-height:26px;">Inicio</a></li>
	<li class="topmenu"><a href="nosotros.php" style="height:26px;line-height:26px;">Nosotros</a></li>
	<li class="topmenu"><a href="programas.php" style="height:26px;line-height:26px;">Programas</a></li>
	<li class="topmenu"><a href="noticias.php" style="height:26px;line-height:26px;">Noticias</a></li>
	<li class="toplast"><a href="contacto.php" style="height:26px;line-height:26px;">Contacto</a></li>
</ul>
	
		
		</br>
			<div id="contenido">
			
				<form name="form" onSubmit="return checkFields();" action="insertarContacto.php" method="POST">
				<input type="hidden" name="to" value="you @ your domain . web">
				<input type="hidden" name="subject" value="Freedback">
				
					<table border=0>
						<tr>
							<td width=50%>
								<p style="text-align:right;">Introduce tu nombre</p>
							</td>
							<td width=50%>
								<input type="text" size=50% name="nombre"/>
							</td>
						</tr>
						<tr>
							<td>
								<p style="text-align:right;">Introduce tu email</p>
							</td>
							<td>
								<input type="text" size=50% name="email"/>
							</td>
						</tr>
						<tr>
							<td><p style="text-align:right;">Escribe tu mensaje</p>
							</td>
							<td>	
								<textarea cols=50% rows=6 name="comentario"></textarea><br><br>
							</td>
						</tr>
						
						
						
						<tr>
							<td>
								<p style="text-align:right;"></p>
							</td>
							<td>
									
		
										<?php
													 
														// Use the AYAH object to get the HTML code needed to
														// load and run PlayThru. You should place this code
														// directly before your 'Submit' button.
														echo $ayah->getPublisherHTML();
										?>
		
								<input type="submit" value="Enviar" name="my_submit_button_name">
												
												
											
       

								
							</td>
						</tr>
						
					
					</table>
					

				</form>
	
				
				
				
				
				
				
			</div>
			<footer>
				<h4>
					<div class="vcard">
						<?php echo $rspie["descripcion"]?>
					</div>
				
				</h4>
				
			</footer>
		</div>
		<a href='https://www.facebook.com/' target='_blank' title='Sígueme en Facebook'><img src='images/facebook.gif' style='display:scroll;position:fixed;bottom:300px;right:0px' alt="" width="40" height="40"/></a>
		<a href='https://www.twitter.com/' target='_blank' title='Sígueme en Twitter'><img src='images/twitter.gif' style='display:scroll;position:fixed;bottom:225px;right:0px' alt="" width="40" height="40"/></a>
	
	</body>
</html>

