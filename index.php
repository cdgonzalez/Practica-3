<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica 3</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>
    <body>
        <div class="container">

            <header>
                <h1>Ingresa a la Página</h1>

            </header>
            <section>
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="login.php" autocomplete="on" method="POST">
                                <h1 style="Color: black;">Login</h1>
                                <p>
                                    <label for="username" class="uname" > Usuario </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername"/>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd"> Contraseña </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                                </p>
                                <p class="keeplogin">
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
									<label for="loginkeeping">Mantener la sesión</label>
								</p>
                                <p class="login button">
                                   <input type="submit" value="Ingresa">
								</p>
                                <p class="change_link">
									¿Aún no te has unido?
									<a href="#toregister" class="to_register">Únete</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="registra.php" autocomplete="on" method="POST">
                                <h1> Registrate </h1>
                                <p>
                                    <label for="usernamesignup" class="uname" > Usuario</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p>
                                    <label for="namesignup" class="yourname"  > Nombre</label>
                                    <input id="namesignup" name="namesignup" required="required" type="text" placeholder="Tu nombre"/>
                                </p>
                                <p>
                                    <label for="passwordsignup" class="youpasswd" > Contraseña</label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p>
                                    <label for="passwordsignup_confirm" class="youpasswd" > Confirmar contraseña</label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button">
									<input type="submit" value="Únete"/>
								</p>
                                <p class="change_link">
									¿Ya estas registrado?
									<a href="#tologin" class="to_register"> Ingresa </a>
								</p>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
</html>
