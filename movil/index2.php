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
		#descripcion{
			border-radius:10 10 10 10;
			background:#fff;
			font-family:"Times New Roman",Georgia,Serif;
			color:black;
			text-align:justify;
		}
</style>
	
	</head>
	<body>
	<!--Pagina Inicio-->
		<div data-role="page" id="index">
	
			<div data-role="header" data-theme="b" data-position="fixed">
			<h1><?php echo $rsencabezado["titulo"]?></h1> 
				<h2><?php echo $rsencabezado["subtitulo"]?></h2>

				
			</div>
			
			
			
			
	
			<div data-role="content">
			
			<img src="../images/<?php echo $rsslider["imagen1"]?>" alt="noticias"/ width="100%">
			<p id="descripcion">CABLE MAXUY es una empresa con sede en el distrito de CASA GRANDE, que brinda el servicio de televisión por cable, una 
			empresa joven y en constante crecimiento. Ofrecemos lo mejor en Películas, Series, Novelas, Nacionales, Deportes, Noticias, Musicales y más</p>
	
			
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