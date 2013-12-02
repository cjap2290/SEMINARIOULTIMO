<!DOCTYPE HTML>

<?php include('conexion.php');
$cn = Conectarse();
//Sentencia sql (sin limit)
$_pagi_sql = "select * from noticias order by id DESC";
//cantidad de resultados por página (opcional, por defecto 20)
$_pagi_cuantos = 3;
//cantidad de enlaces que se mostrarán como máximo en la barra de navegación
$_pagi_nav_num_enlaces = 3;//Elegir un número pequeño para que se note el resultado
//Decidimos si queremos que se muesten los errores de mysql
$_pagi_mostrar_errores = false;//recomendado true sólo en tiempo de desarrollo.
//Si tenemos una consulta compleja que hace que el Paginator no funcione correctamente,
//realizamos el conteo alternativo.
$_pagi_conteo_alternativo = true;//recomendado false.
//Supongamos que sólo nos interesa propagar estas dos variables
$_pagi_propagar = array("titulo");//No importa si son POST o GET
//Definimos qué estilo CSS se utilizará para los enlaces de paginación.
//El estilo debe estar definido previamente
$_pagi_nav_estilo = "paginador";
//definimos qué irá en el enlace a la página anterior
$_pagi_nav_anterior = "&lt;";// podría ir un tag <img> o lo que sea
//definimos qué irá en el enlace a la página siguiente
$_pagi_nav_siguiente = "&gt;";// podría ir un tag <img> o lo que sea
include("paginator.inc.php");
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

//PARA EL MENU DE OPCIONES
$rsmenu="select * from menu where principal=1";
$menu=mysql_query($rsmenu);
$rsmenu=mysql_fetch_array($menu);

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

					<div id="buscador">
						<form action="busqueda.php" method="POST">
						<input type="text" name="t1" size="40"style="border-radius:6px;"/>
						<input type="submit" value="Buscar Noticia" style="border-radius:6px;"/>
						</form>
					</div>
			
				
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
								<?php while($row = mysql_fetch_array($_pagi_result)){ ?>
								<div class="post">
										<div class="postheader">
												<div class="date shadow">
												
												<span class="day"><?php echo $row["dia"]?></span>
												<span class="month"><?php echo $row["mes"]?></span>

												</div>
										
										 
										</div>
										
										<div class="postcontent"><h2><a href="#"><?php echo $row["titulo"]?></a></h2>

										  <p><?php echo $row["descripcion"]?>	</p>
										  
										<?php echo '<iframe width="410" height="305" src="'.$row['embed'].'" frameborder="0" allowfullscreen></iframe>'?>
										  
										  
										 </div>
								</div>
								
								
								
								<?php }
echo"<p>".$_pagi_navegacion."</p>";
?>
								
								  
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

