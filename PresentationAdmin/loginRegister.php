<!DOCTYPE html>
<?php
    if(isset($_GET['mensaje'])){
        $mensaje = $_GET['mensaje'];
    }else{
        $mensaje = 0;
    }
?>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Registrarse/Iniciar Sesión</title>
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

        <link rel="stylesheet" href="../Styles/css\bootstrap.min.css">
        <link rel="stylesheet" href="../StyleLogin/css/style.css">
         <script src="../Styles/js\vendor\jquery-1.12.4.min.js"></script>
        <!-- bootstrap JS
        ============================================ -->		
        <script src="../Styles/js\bootstrap.min.js"></script>

    </head>

    <body onload="mensaje();">
        <div class="form">

            <ul class="tab-group">
                <li class="tab active"><a href="#signup">Registro</a></li>
                <li class="tab"><a href="#login">Iniciar Sesión</a></li>
            </ul>

            <div class="tab-content">
                <div id="signup">   
                    <h1>Registrese Gratis</h1>

                    <form action="../Actions/LoginAction.php" method="post">

                        <div class="top-row">
                            <div class="field-wrap">
                                <label>
                                    Nombre<span class="req">*</span>
                                </label>
                                <input type="text" required autocomplete="off" name="txtNombre"/>
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Apellidos<span class="req">*</span>
                                </label>
                                <input type="text"required autocomplete="off" name="txtLastName"/>
                            </div>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Correo Electrónico<span class="req">*</span>
                            </label>
                            <input type="email"required autocomplete="off" name="txtEmail"/>
                        </div>
                        
                        <div class="field-wrap">
                            <label>
                                Usuario<span class="req">*</span>
                            </label>
                            <input type="text" required autocomplete="off" name="txtUser"/>
                        </div>
                        
                        <div class="field-wrap">
                            <label>
                                Contraseña<span class="req">*</span>
                            </label>
                            <input type="password"required autocomplete="off" name="txtPassword"/>
                        </div>
                        <input type="hidden" name="register" value="register">
                        <button type="submit" class="button button-block"/>Registrarse</button>

                    </form>

                </div>

                <div id="login">   
                    <h1>Bienvenido de vuelta!</h1>
                    <form action="../Actions/LoginAction.php" method="post" id="formLogin">
                        <div class="field-wrap">
                            <label>
                                Usuario<span class="req">*</span>
                            </label>
                            <input type="text" name="txtUser" required autocomplete="off"/>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Contraseña<span class="req">*</span>
                            </label>
                            <input type="password" name="txtPassword"required autocomplete="off"/>
                        </div>
                        <input type="hidden" value="login" name="login">
                        <!--<button class="button button-block"/>Iniciar Sesión</button>-->
                        <button type="submit" class="button button-block"/>Iniciar Sesión</button>
                    </form>
                </div>
            </div><!-- tab-content -->
        </div> <!-- /form -->
        <div id="mensaje" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" id="nameSite">Error</h4>
                        </div>
                        <div class="modal-body">
                            <p id="description">Lo sentimos. El usuario no se encuentra registrado.</p><br>                    
                        </div>
                    </div>

                </div>
            </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="../Styles/js\vendor\jquery-1.12.4.min.js"></script>
        <!-- bootstrap JS
        ============================================ -->		
        <script src="../Styles/js\bootstrap.min.js"></script>
        <script src="../StyleLogin/js/index.js"></script>
        <script type="text/javascript">
                function mensaje(){
                    var error = <?php echo $mensaje ?> ;
                    if(error === 1){
                        $("#mensaje").modal('show');
                    }
                }
        </script>
    </body>
</html>

