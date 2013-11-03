<!DOCTYPE HTML>

<html>

	<head manifest="/manifiesto/manifiesto.cache">
		<title>CABLE MAXUY</title>
		
		
		
		<link type="image/x-icon" href="images/favicon.ico" rel="icon" />
		<link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />
		<link rel="stylesheet" href="css/estilo.css" type="text/css" />
		<link rel="stylesheet" href="css/slider.css" type="text/css" />
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
		<script type="text/javascript" src="engine1/jquery.js"></script>
		
		<link rel="stylesheet" href="CSS3Menu_files/css3menu4/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>


	
		
	</head>
	<body>
		<?php
include("conexion.php");
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
		
//Para Publicidad

$rspublicidad="select * from publicidad";
$publicidad=mysql_query($rspublicidad);
$rspublicidad=mysql_fetch_array($publicidad);

//Para SLIDER

$rsslider="select * from slider";
$slider=mysql_query($rsslider);
$rsslider=mysql_fetch_array($slider);





?>
		<div id="principal">
		
		<div id="cabecera">
											
							<h1><?php echo $rsencabezado["titulo"]?></h1> 
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
<!-- End css3menu.com BODY section -->


		
		</br>
			
			
			
			<div id="contenido">
			
				
				
			
					
					<div id="wowslider-container1">
								<div class="ws_images"><ul>
									<li><img src="slider/data1/images/<?php echo $rsslider['imagen1'] ?>" alt="banner1" title="banner1" id="wows1_0"/></li>
									<li><img src="slider/data1/images/<?php echo $rsslider['imagen2'] ?>" alt="banner2" title="banner2" id="wows1_1"/></li>
									<li><img src="slider/data1/images/<?php echo $rsslider['imagen3'] ?>" alt="banner3" title="banner3" id="wows1_2"/></li>
									<li><img src="slider/data1/images/<?php echo $rsslider['imagen4'] ?>" alt="banner4" title="banner4" id="wows1_3"/></li>
							</ul></div>
							<div class="ws_bullets"><div>
							
									<a href="#" title="banner1"><img src="slider/data1/tooltips/<?php echo $rsslider['imagen1'] ?>" alt="banner1"/>1</a>
									<a href="#" title="banner2"><img src="slider/data1/tooltips/<?php echo $rsslider['imagen2'] ?>" alt="banner2"/>2</a>
									<a href="#" title="banner3"><img src="slider/data1/tooltips/<?php echo $rsslider['imagen3'] ?>" alt="banner3"/>3</a>
									<a href="#" title="banner4"><img src="slider/data1/tooltips/<?php echo $rsslider['imagen4'] ?>" alt="banner4"/>4</a>
							</div></div>
<!--<span class="wsl"><a href="http://wowslider.com">Photo Slider</a> by WOWSlider.com v4.7</span> -->
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
						
						
				
					
					<div id="informacion">
											
							<h2><?php echo $rscontenido["titulo"]?></h3>
							<h3><?php echo $rscontenido["subtitulo"]?></h4>
							<p><?php echo $rscontenido["descripcion"]?></p>
						
					</div>
					
					<table cellspacing="10" align="center" >
						
						<tr>
							<td><img src="images/<?php echo $rspublicidad["imagen1"] ?>" width="308" height="120"></td>
							<td><img src="images/<?php echo $rspublicidad['imagen2'] ?>" width="308" height="120"></td>
							<td><img src="images/<?php echo $rspublicidad['imagen3'] ?>" width="308" height="120"></td>
						</tr>
						
						<tr>
							<td><img src="images/<?php echo $rspublicidad['imagen4'] ?>" width="308" height="120"></td>
							<td><img src="images/<?php echo $rspublicidad['imagen5'] ?>" width="308" height="120"></td>
							<td><img src="images/<?php echo $rspublicidad['imagen6'] ?>" width="308" height="120"></td>
						</tr>
					</table>
			</div>
			
			<footer>
				<h4>
					<div class="vcard">
						<?php echo $rspie["descripcion"]?>
						
						
					</div>
				
				
				</h4>
				
			</footer>
		</div>
		
		<!--codigo para poner icono de facebook-->
		<a href='https://www.facebook.com/' target='_blank' title='Sígueme en Facebook'><img src='images/facebook.gif' style='display:scroll;position:fixed;bottom:300px;right:0px' alt="" width="40" height="40"/></a>
		
		<!--codigo para poner icono de twitter-->
		<a href='https://www.twitter.com/' target='_blank' title='Sígueme en Twitter'><img src='images/twitter.gif' style='display:scroll;position:fixed;bottom:225px;right:0px' alt="" width="40" height="40"/></a>
	</body>
</html>





