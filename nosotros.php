<!DOCTYPE HTML>

<html>

	<head manifest="/manifiesto/manifiesto.cache">
		<title>CABLE MAXUY</title>
		
		
		<meta charset ="UTF-8 ">
		<link type="image/x-icon" href="images/favicon.ico" rel="icon" />
		<link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />
		<link rel="stylesheet" href="css/estilo.css" type="text/css" />
		<link href="css/estilonoticia.css" rel="stylesheet" type="text/css" />
		
		<!--estilos y script del slider-->
		<link rel="stylesheet" type="text/css" href="engine2/style.css" />
		<script type="text/javascript" src="engine2/jquery.js"></script>
		
		
		
		<link rel="stylesheet" href="CSS3Menu_files/css3menu4/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>


	
		
	</head>
	<body>
		<?php
include("conexion.php");
$cn = conectarse();

//Para el encabezado
$rsencabezado="select * from encabezado  where principal=1";
$encabezado=mysql_query($rsencabezado);
$rsencabezado=mysql_fetch_array($encabezado);



//PARA EL PIE DE PAGINA
$rspie="select * from pie where principal=1";
$pie=mysql_query($rspie);
$rspie=mysql_fetch_array($pie);	

//PARA EL MENU DE OPCIONES
$rsmenu="select * from menu where principal=1";
$menu=mysql_query($rsmenu);
$rsmenu=mysql_fetch_array($menu);


//PARA nosotros
$rsnosotros="select * from nosotros where principal=1";
$nosotros=mysql_query($rsnosotros);
$rsnosotros=mysql_fetch_array($nosotros);

//PARA LAS NOTICIAS
$rsnoticia="select * from noticias";
$noticia=mysql_query($rsnoticia);

		
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
	<li class="topfirst"><a href="index.php" style="height:26px;line-height:26px;"><?php echo $rsmenu["menu1"]?></a></li>
	<li class="topmenu"><a href="nosotros.php" style="height:26px;line-height:26px;"><?php echo $rsmenu["menu2"]?></a></li>
	
	<li class="topmenu"><a href="noticias.php" style="height:26px;line-height:26px;"><?php echo $rsmenu["menu3"]?></a></li>
	<li class="toplast"><a href="contacto.php" style="height:26px;line-height:26px;"><?php echo $rsmenu["menu4"]?></a></li>

</ul>
<!-- End css3menu.com BODY section -->


		
			
			
			
			<div id="contenido">
				
				<div id="informacion">
				
											
							<h2>Mision</h2>
							<p><?php echo $rsnosotros["mision"]?></p>
							</br>
							<div align="center">
							<img src="images/<?php echo $rsnosotros["imagen1"] ?>"  width="300" height="300" style="border-radius: 40px 60px 100px 100px;-moz-border-radius: 40px 60px 100px 100px; 
-webkit-border-radius: 40px 60px 100px 100px; "/>
							</div>
							
							
							<h2>Vision</h2>
							<p> <?php echo $rsnosotros["vision"]?></p></p>
							</br>
							<div align="center">
							<img src="images/<?php echo $rsnosotros["imagen2"] ?>" width="300" height="300" style="border-radius: 40px 60px 100px 100px;-moz-border-radius: 40px 60px 100px 100px; 
-webkit-border-radius: 40px 60px 100px 100px; "/>
							</div>
						
					</div>

				</div>
			
					
					<footer>
				<h4>
					<div id="vcard">
					
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

