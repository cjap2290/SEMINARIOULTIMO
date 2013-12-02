<!DOCTYPE HTML>
<?php
include('conexion.php');
$cn = Conectarse();
$clave=strtoupper($_POST["t1"]);
if ($clave<>''){
//CUENTA EL NUMERO DE PALABRAS
$separa=explode(" ",$clave);
$numero=count($separa);
//echo $numero;
if ($numero==1) {
//SI SOLO HAY UNA PALABRA DE BUSQUEDA SE ESTABLECE UNA INSTRUCION CON LIKE
$rsarchivo="SELECT * FROM noticias WHERE titulo LIKE '%$clave%'";
} elseif ($numero>1) {
//SI HAY UNA FRASE SE UTILIZA EL ALGORTIMO DE BUSQUEDA AVANZADO DE MATCH AGAINST
//busqueda de frases con mas de una palabra y un algoritmo especializado
$rsarchivo="select *, MATCH (titulo) AGAINST ('$clave') AS Score from noticias WHERE MATCH(titulo) AGAINST ('$clave') ORDER BY Score DESC";
}
}
$archivo = mysql_query($rsarchivo); ///ejecuto la consulta like
?>
<html>

	<head manifest="/manifiesto/manifiesto.cache">
		<title>CABLE MAXUY</title>
		
		
		
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


//Para el encabezado
$rsencabezado="select * from encabezado  where principal=1";
$encabezado=mysql_query($rsencabezado);
$rsencabezado=mysql_fetch_array($encabezado);



//PARA EL PIE DE PAGINA
$rspie="select * from pie where principal=1";
$pie=mysql_query($rspie);
$rspie=mysql_fetch_array($pie);	

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
	<li class="topfirst"><a href="index.php" style="height:26px;line-height:26px;">Inicio</a></li>
	<li class="topmenu"><a href="nosotros.php" style="height:26px;line-height:26px;">Nosotros</a></li>
	
	<li class="topmenu"><a href="noticias.php" style="height:26px;line-height:26px;">Noticias</a></li>
	<li class="toplast"><a href="contacto.php" style="height:26px;line-height:26px;">Contacto</a></li>

</ul>
<!-- End css3menu.com BODY section -->


		
			
			
			
			<div id="contenido">
				<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="data2/images/noticias.jpg" alt="noticias" title="noticias" id="wows1_0"/></li>
<li><img src="data2/images/noticias2.jpg" alt="noticias2" title="noticias2" id="wows1_1"/></li>
<li><img src="data2/images/noticias3.jpg" alt="noticias3" title="noticias3" id="wows1_2"/></li>
<li><img src="data2/images/noticias4.jpg" alt="noticias4" title="noticias4" id="wows1_3"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="noticias"><img src="data2/tooltips/noticias.jpg" alt="noticias"/>1</a>
<a href="#" title="noticias2"><img src="data2/tooltips/noticias2.jpg" alt="noticias2"/>2</a>
<a href="#" title="noticias3"><img src="data2/tooltips/noticias3.jpg" alt="noticias3"/>3</a>
<a href="#" title="noticias4"><img src="data2/tooltips/noticias4.jpg" alt="noticias4"/>4</a>
</div></div>

	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine2/wowslider.js"></script>
	<script type="text/javascript" src="engine2/script.js"></script>
				
				<div id="content">
							
								<div id="left">
								
								<div class="container">
								<?php
									while ($rsarchivo=mysql_fetch_array($archivo)) {
								?>
									<div class="post">
										<div class="postheader">
												<div class="date shadow">
													<span class="day"><?php echo preg_replace("/$clave/","<i><b>$clave</b></i>", $rsarchivo['dia']) ?></span>
												<span class="month"><?php echo preg_replace("/$clave/","<i><b>$clave</b></i>", $rsarchivo['mes']) ?></span>
												</div>
										
										 
										</div>
										
										<div class="postcontent"><h2><a href="#"><?php echo preg_replace("/$clave/","<i><b>$clave</b></i>", $rsarchivo['titulo']) ?></a></h2>

										 
										  <p><?php echo preg_replace("/$clave/","<i><b>$clave</b></i>", $rsarchivo['descripcion']) ?>	</p>
										  
										
										
											<?php echo '<iframe width="410" height="305" src="'.$rsarchivo['embed'].'" frameborder="0" allowfullscreen></iframe>'?>

									
										 </div>
								</div>
								
								<?php } ?>
								
								
								
							
								
								  
								</div>
								
								</div>
				</div>
								<div id="sidebar">
								<div class="container">

								<h2>Noticias</h2>
								<div class="categories">
								<ul class="shadow">
								<li><a href="#">Casa Grande</a></li>
								<li><a href="#">Chocope</a></li>
								<li><a href="#">Ascope</a></li>
								<li><a href="#">Chicama</a></li>
								<li><a href="#">Paijan</a></li>
								<li><a href="#">Otros Distritos</a></li>


								</ul>
								</div>

								<h2>Anuncie con nosotros</h2>
								<div class="latestposts">
								<img src="images/canal1.jpg" style="border-radius:6px;" width="280" height="180"/>
								</div>


								</br>
								<div class="categories">
								<img src="images/canal2.jpg" style="border-radius:6px;" width="280" height="180"/>
								</div>
								
								</br>
								<div class="categories">
								<img src="images/canal3.jpg" style="border-radius:6px;" width="280" height="180"/>
								</div>
								
								</br>
								<div class="categories">
								<img src="images/canal4.jpg" style="border-radius:6px;" width="280" height="180"/>
								</div>



								</div>
								</div>

								<div class="clear"></div>

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

