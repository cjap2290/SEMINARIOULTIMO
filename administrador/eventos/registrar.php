<?php include('../conexion.php');
$link = conectarse();


//Para la cabecera
$sql="select * from encabezado order by id desc";
$result1=mysql_query($sql);

?>
<!DOCTYPE html>

    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
		<title>Sistema de Administracion</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/animate-custom.css" />
		
<script type="text/javascript">		
function checkFields() {
missinginfo = "";
if (document.form.t1.value == "") {
missinginfo += "\n     -  Nombre";
}



if(document.form.t2.value == "") {
missinginfo += "\n     -  Usuario";
}

if(document.form.t3.value == "") {
missinginfo += "\n     -  Password";
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
alert('Su consulta se registro correctamente');
return true;
}

</script>
    </head>
    <body>
        <div class="container">
            
            <div class="bloque1">
			</div>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                             
                                <h1>CABLE MAXUY</h1> 
                                
                                
                               <p class="change_link">
									Desea registrar un usuario ?
									<a href="#toregister" class="to_register">Presione Aqui</a>
								</p> 
                            
                        </div>

                       
						<!--Para registrar otros usuarios-->

					   <div id="register" class="animate form">
                            <form name="form" onSubmit="return checkFields();" action="insertarusuario.php" method="POST"> 
                                <h1> Registro de Usuario </h1> 
								
								<p> 
                                    <label for="nombres" class="uname" data-icon="u" >Nombres</label>
                                    <input id="nombressignup" name="t1"  type="text" placeholder="ingrese nombre"/> 
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Usuario</label>
                                    <input id="usernamesignup" name="t2"  type="text" placeholder="ingrese usuario" />
                                </p>
                                
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Tu Password </label>
                                    <input id="passwordsignup" name="t3"  type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                
                                <p class="signin button"> 
									<input type="submit" value="Registrar"/> 
									
								</p>
                                
                            </form>
							
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
		
    </body>
</html>
