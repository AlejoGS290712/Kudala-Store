<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/InfoUsuariostyle.css">
    <title>Cuenta Usuario</title>
</head>
<body>    
    <div class="form-InfoUsuario"> 

        <h3>Cuenta de Usuario</h3>
        <form action="#" method="post">                        
            
            <fieldset disabled>                
                <legend>Inf. Personal</legend>                

                <label for="idNombre">Nombre:</label>
                <input class="infoUsuario" type="text" name="txtNombre" id="idNombre">

                <label for="idApellido">Apellido:</label>
                <input class="infoUsuario" type="text" name="txtApellido" id="idApellido">

                <label for="idslcTipoDoc">Tipo de documento</label>
                <select class="infoUsuario" name="slcTipoDoc" id="idslcTipoDoc">
                    <option value=""></option>                    
                </select> 

                <label for="idCedula">Numero de Documento:</label>
                <input class="infoUsuario" type="text" name="txtDoc" id="idtxtdoc">

            </fieldset>                
                
            <fieldset disabled>
                <legend>Inf. Contacto</legend>                

                <label for="idCorreo">Correo:</label>
                <input class="infoUsuario" type="email" name="txtCorreo" id="idCorreo">

                <label for="idslcTipoTel">Tipo de telefono</label>
                <select class="infoUsuario" name="slcTipoTel" id="idslcTipoTel">
                    <option value=""></option>                    
                </select>               
                
                <label for="idTelefono">Número de Telefono:</label>
                <input class="infoUsuario" type="text" name="txtTelefono" id="idTelefono">
                
                <label for="idDireccion">Direccion:</label>
                <input class="infoUsuario" type="text" name="txtDireccion" id="idDireccion">

                <label for="idCiudad">Ciudad:</label>
                <input class="infoUsuario" type="text" name="txtCiudad" id="idCiudad">
            
            </fieldset>
        
            <fieldset disabled>
                <legend>Seguridad</legend>

                <label for="idContrasenia">Contraseña:</label>
                <input class="infoUsuario" type="password" name="txtContrasenia" id="idContrasenia">

            </fieldset>                    
        
            <fieldset id="fsModificar">
                <input class="botons" type="button" id="idbtnModificar" name="btnModificar" value="Modificar">                    
            </fieldset>                        
        
            <fieldset id="fsAceptarCancelar">                    
                <input class="botons" type="submit" id="idbtnAceptar"  name="btnAceptar" value="Aceptar" >
                <input class="botons" type="button" id="idbtnCancelar" name="btnancelar" value="Cancelar">
            </fieldset>                
    
        </form>
    </div>

</body>
</html>