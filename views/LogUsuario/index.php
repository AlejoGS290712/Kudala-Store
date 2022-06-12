<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/CSS/RegLogUsuarioStyle.css">

    <title>Login</title>
</head>
<body>
    <div class="container">
        <form class="form-register" action="<?php echo constant('URL'); ?>LogRegUsuario/iniciarSesion" method="post">
            <div class="row">
                <h4>Login</h4>
            </div>            
            <div class="row">
                <input class="infoUsuario" type="email" name="txtCorreo" id="idCorreo" placeholder="Ingrese su Correo">
            </div>                    
            <div class="row">
                <input class="infoUsuario" type="password" name="txtContrasennia" id="idContrasennia" placeholder="Ingrese su Contraseña" required>
            </div>     
            
            <!--Mensaje de advertencia-->                    
            <div id="divAlert" class="row alert alert-danger text-center" style="display: none;">
                    
                <div class="text-center">
                    <img src="<?php echo constant('URL'); ?>public/Img/DangerIcon.png"  style="margin-right: 5%;" width="30" height="30">            
                </div>
                <div class="col">
                    <h5 id="lblMsj"><?php echo $this->msjError; ?></h5>
                </div>                                
                
            </div>

            <div class="row">
                <input class="botons" type="submit" value="Iniciar Sesion">            
            </div>   
                     
            <div class="row">
                <p><a href="<?php echo constant('URL'); ?>LogRegUsuario/loadRegUsuario"> Aun no tengo cuenta </a></p>
            </div>  
            
            <hr>
            <div class="row">
                <p><a href="<?php echo constant('URL'); ?>Main"> Volver al Inicio </a></p>
            </div>           
        </form>        
    </div>    
    
    <script src="<?php echo constant('URL'); ?>public/js/RegLogUsuario.js"></script>
</body>
</html>