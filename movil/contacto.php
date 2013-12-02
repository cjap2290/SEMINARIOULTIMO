	<?php
include("../conexion.php");
$cn = conectarse();

//Para el encabezado
$rsencabezado="select * from encabezado where principal=1";
$encabezado=mysql_query($rsencabezado);
$rsencabezado=mysql_fetch_array($encabezado);

//Para el contenido		
$rscontenido="select * from contenido where principal=1";
$contenido=mysql_query($rscontenido);
$rscontenido=mysql_fetch_array($contenido);

//PARA EL PIE DE PAGINA
$rspie="select * from pie where principal=1";
$pie=mysql_query($rspie);
$rspie=mysql_fetch_array($pie);	

//PARA EL MENU DE OPCIONES
$rsmenu="select * from menu where principal=1";
$menu=mysql_query($rsmenu);
$rsmenu=mysql_fetch_array($menu);
		
//Para Publicidad

$rspublicidad="select * from publicidad";
$publicidad=mysql_query($rspublicidad);
$rspublicidad=mysql_fetch_array($publicidad);

//Para SLIDER

$rsslider="select * from slider";
$slider=mysql_query($rsslider);
$rsslider=mysql_fetch_array($slider);





?>

<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
	
	
	<!--CODIGO PARA PONER UNA IMAGEN DE FONDO-->
	<style type="text/css">
		.ui-page {
				background: transparent url('../images/fondo.png');
				}
		label{
			color:white;
			
		}
		#error{
				text-align:center;
				color:#C33;
            }
</style>
	
	</head>
	<body>
		
		<!--Pagina Contacto-->
		<div data-role="page" id="contacto">
		
		
			<div data-role="header" data-theme="b" data-position="fixed">
			<h1><?php echo $rsencabezado["titulo"]?></h1> 
				<h2><?php echo $rsencabezado["subtitulo"]?></h2>	
				
				
			
					
			
			</div>
			
			
			
			
			
			<div data-role="content">
			<?php
                                    if(isset($_POST['enviar'])){
                                        error_reporting(0);
                                        $nombre = strtoupper($_POST['nombre']);
                                        $email = $_POST['email'];
                                        $comentario = strtoupper($_POST['comentario']);
                                        $captcha = $_POST['captcha'];
                                        $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
                                        
                                        if($nombre == ""){
                                            $mensaje = "Ingrese nombre para continuar";
                                        }else if(!preg_match($regex, $email)){
                                            $mensaje = "Ingrese email válido";
                                        }else if($comentario == ""){
                                            $mensaje = "Ingrese comentario";
                                        
                                        }else{
                                            $rsinsertar="insert into contacto(nombre,email,comentario) values('$nombre','$email','$comentario')";
                                            if(@mysql_query($rsinsertar)){
                                                $mensaje = "Mensaje enviado correctamente";
                                            }else{
                                                $mensaje = "No se pudo enviar el mensaje";
                                            }
                                        }
                                    }else{
                                        $mensaje = "";
                                    }
                                ?>
			<form action="#" method="POST" >
				<label>Nombres:</label>
				<input type="text" name="nombre" placeholder="Nombres">
				
				<label>Correo:</label>
				<input type="text" name="email" placeholder="Correo">
				
				<label>Mensaje:</label>
				<textarea cols="40" name="comentario" rows="8"></textarea>
				
				<div align="center">
				<input type="submit" value="Enviar" name="enviar" data-inline="true" data-icon="plus">
				<input type="reset" value="Borrar" data-inline="true" data-icon="delete">
				</div>
			</form>
			<p id="error"><?php echo $mensaje; ?></p>
			
			
			<div style="background-color:black; height:5">
			</div>
			
			
			
			
			<a href="index2.php" data-role="button" data-theme="c" data-icon="home" data-transition="flip">Inicio</a>
				<a href="noticias.php" data-role="button" data-theme="c" data-icon="plus" data-transition="flip">Noticias</a>
				<a href="nosotros.php" data-role="button" data-theme="c" data-icon="plus" data-transition="flip">Nosotros</a>
				<a href="contacto.php" data-role="button" data-theme="c" data-icon="plus" data-transition="flip">Contacto</a>
			
			
			</div>
			
			<div data-role="footer" data-theme="b" data-position="fixed" data-id="pie_fijo">
			<h2><?php echo $rspie["descripcion"]?></h2>
			
			
			
			</div>
		</div>
		
		</body>
</html>