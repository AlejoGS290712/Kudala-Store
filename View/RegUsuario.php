<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="../CSS/RegUsuarioStyle.css">

    <title>Registro</title>
</head>
<body>    
    <form class="form-register" action="" method="post">
        <h4>Registro</h4>
        
        <input class="infoUsuario" type="text" name="txtNombre" id="idNombre" placeholder="Ingrese un Nombre">
        <input class="infoUsuario" type="text" name="txtApellido" id="idApellido" placeholder="Ingrese un Apellido">
        <input class="infoUsuario" type="email" name="txtCorreo" id="idCorreo" placeholder="Ingrese un Correo">
        <input class="infoUsuario" type="password" name="txtContrasenia" id="idContrasenia" placeholder="Ingrese una Contraseña">
        
        <input class="botons" type="submit" value="Registrar">            

        <p><a href="#"> Ya tengo Cuenta </a></p>
    </form>
</body>
</html>