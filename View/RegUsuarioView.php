<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/RegLogUsuarioStyle.css">

    <title>Registro</title>
</head>
<body>    
    <div class="container">   
        <form class="form-register" action="./Controller/UsuarioController.php" method="post">
            <div class="row">
                <h4>Registro</h4>
            </div>

            <div class="row">
                <input class="infoUsuario" type="text" name="txtNombre" id="idNombre" placeholder="Ingrese un Nombre">
            </div>
            <div class="row">
                <input class="infoUsuario" type="text" name="txtApellido" id="idApellido" placeholder="Ingrese un Apellido">
            </div>
            <div class="row">
                <input class="infoUsuario" type="email" name="txtCorreo" id="idCorreo" placeholder="Ingrese un Correo">
            </div>
            <div class="row">
                <input class="infoUsuario" type="password" name="txtContrasenia" id="idContrasenia" placeholder="Ingrese una Contraseña">
            </div>
            <div class="row">
                <input class="botons" type="submit" id="idbtnReg" value="Registrar">            
            </div>
            
            <div class="row">
                <p><a href="./LogUsuarioView.php"> Ya tengo Cuenta </a></p>
            </div>
        </form>
    </div> 
    
    <script src="./Js/RegUsuario.js"></script>
</body>
</html>