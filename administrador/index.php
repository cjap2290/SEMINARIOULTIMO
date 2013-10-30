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

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
function checkFields() {
missinginfo = "";
if (document.form.t1.value == "") {
missinginfo += "\n     -  Usuario";
}



if(document.form.t2.value == "") {
missinginfo += "\n     -  Contrasena";
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

return true;
}
//  End -->
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
                            <form  name="form" onSubmit="return checkFields();" action="valida.php" method="POST"> 
                                <h1>CABLE MAXUY</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Ingrese su usuario </label>
                                    <input id="username" name="t1"  type="text" placeholder="usuario"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Contrasena</label>
                                    <input id="password" name="t2"  type="password" placeholder="clave" /> 
                                </p>
                               <!-- <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label> -->
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Ingresar" /> 
								</p>
                               <!-- <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p> -->
                            </form>
                        </div>

                       
						<!--Para registrar otros usuarios-->

					   <!-- <div id="register" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                
                            </form>
                        </div>-->
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>