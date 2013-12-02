<!DOCTYPE HTML>

<?php
session_start();
?>




<html>
	<head>
		<title>CABLE MAXUY</title>
                <meta charset="utf-8">
		<link type="image/x-icon" href="images/favicon.ico" rel="icon" />
		<link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />
		<link rel=stylesheet href="css/estilo.css" type="text/css" />
		
		<link rel="stylesheet" href="CSS3Menu_files/css3menu4/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
                <style>
                    #form{
                margin:100px;
                width: 350px;
                padding: 10px;
				margin:0 auto;
            }
            #form label{
                font:bold 11px arial;
                color: #565656;
                padding-left: 1px;
            }
            #form label.mandat{color: #f00;}
            #form input[type="text"]{
                margin-bottom: 8px;
                padding: 5px;
                font: 12px arial;
                color: #0060a3;
            }
            #form textarea{
                width: 340px;
                height: 80px;
                resize: none;
                margin: 0 0 8px 1px;
                padding: 5px;
                font: 12px arial;
                color: #4A3C31;
            }
            #form img{
                margin-bottom: 8px;
            }
            #form input[type="submit"]{
                background-color: #0064aa;
                border: none;
                color: #fff;
                padding: 5px 8px;
                cursor: pointer;
                font:bold 12px arial;
            }
            .error{
				text-align:center;
				color:#C33;
            }
                </style>
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

//PARA EL MENU DE OPCIONES
$rsmenu="select * from menu where principal=1";
$menu=mysql_query($rsmenu);
$rsmenu=mysql_fetch_array($menu);

?>
		
		<div id="principal">
		<div id="cabecera">
											
				<h1><?php echo $rsencabezado["titulo"]?></h1> - 
				<h2><?php echo $rsencabezado["subtitulo"]?></h2>	
						
		</div>
		</br>
		
		
		<ul id="css3menu4" class="topmenu">
	<li class="topfirst"><a href="index.php" style="height:26px;line-height:26px;"><?php echo $rsmenu["menu1"]?></a></li>
	<li class="topmenu"><a href="nosotros.php" style="height:26px;line-height:26px;"><?php echo $rsmenu["menu2"]?></a></li>
	
	<li class="topmenu"><a href="noticias.php" style="height:26px;line-height:26px;"><?php echo $rsmenu["menu3"]?></a></li>
	<li class="toplast"><a href="contacto.php" style="height:26px;line-height:26px;"><?php echo $rsmenu["menu4"]?></a></li>
</ul>
	
		
		</br>
			<div id="contenido">
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
                                        }else if($captcha != $_SESSION['cap_code']){
                                            $mensaje = "Código Captcha incorrecto";
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
           <form action="#" method="post">
            <div id="form">
                <table border="0" width="100%">
                    <tr>
                        <td colspan="2"><label>Nombres:</label><label class="mandat"> *</label><br/>
                            <input type="text" name="nombre" id="nombre" size="62"/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label>Correo:</label><label class="mandat"> *</label><br/>
                            <input type="text" name="email" id="email" size="62"/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label>Mensaje:</label><label class="mandat"> *</label><br/>
                            <textarea  name="comentario" id="comentario"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label>Ingrese el contenido de la imagen</label><label class="mandat"> *</label></td>
                    </tr>
                    <tr>
                        <td width="60px" colspan="2">                           
                            <input type="text" name="captcha" id="captcha" maxlength="6" size="6" style="float:left"/><img src="captcha.php" style="float: left;"/></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Enviar comentario" id="enviar" name="enviar"/></td>
                        <td></td>
                    </tr>
                </table>
                
            </div>
        </form>
        <p class="error"><?php echo $mensaje; ?></p>
	 
				
				
				
				
				
				
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

