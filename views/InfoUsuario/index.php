<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/CSS/InfoUsuariostyle.css">
    <title>Cuenta Usuario</title>
</head>
<body>   
    <?php require 'views/header.php';?>

    <div class="form-InfoUsuario"> 

        <h3>Cuenta de Usuario</h3>
        <form id="idFormUsuario" action="#" method="post">                        
            
            <fieldset id="AllInfoUser" disabled>
                <fieldset id="idfsInfoUser">                
                    <legend>Inf. Personal</legend>                
    
                    <label for="idNombre">Nombre:</label>
                    <input class="infoUsuario" type="text" name="txtNombre" id="idNombre" value="<?php echo $this->usuario->getNombreUser(); ?>">
    
                    <label for="idApellido">Apellido:</label>
                    <input class="infoUsuario" type="text" name="txtApellido" id="idApellido" value="<?php echo $this->usuario->getApellidoUser(); ?>">
    
                    <label for="idslcTipoDoc">Tipo de documento</label>
                    <select class="infoUsuario" name="slcTipoDoc" id="idslcTipoDoc" >

                        <?php 
                        foreach($this->listaTipoDoc as $tipoDoc)
                        {                            
                            $slc = '';
                            if( $this->usuario->getTipoDoc() == $tipoDoc->getIdTipoDocumento() )$slc = "Selected";
                            echo '<option value="'. $tipoDoc->getIdTipoDocumento() .'" '. $slc .'> '. $tipoDoc->getDescripcionTD() .' </option>';                            
                        }
                        ?>
                                            
                    </select> 
    
                    <label for="idCedula">Numero de Documento:</label>
                    <input class="infoUsuario" type="text" name="txtDoc" id="idtxtdoc" value="<?php echo $this->usuario->getDocumento(); ?>">
                </fieldset>                
                    
                <fieldset>
                    <legend>Inf. Contacto</legend>                
    
                    <label for="idCorreo">Correo:</label>
                    <input class="infoUsuario" type="email" name="txtCorreo" id="idCorreo" value="<?php echo $this->usuario->getCorreoUser(); ?>">
    
                    <label for="idslcTipoTel">Tipo de telefono</label>
                    <select class="infoUsuario" name="slcTipoTel" id="idslcTipoTel" value="<?php echo $this->usuario->getTipoTel(); ?>">
                        <?php 
                            foreach($this->listaTipoTel as $tipoTel)
                            {
                                $slc = '';
                                if( $tipoTel->getIdTipoTel() ==  $this->usuario->getTipoTel())$slc = "Selected";                                                              
                                echo '<option value="'. $tipoTel->getIdTipoTel() .'"'. $slc .'> '. $tipoTel->getDescripcionTT(). ' </option>';                                                    
                            }
                        ?>                    
                    </select>               
                    
                    <label for="idTelefono">Número de Telefono:</label>
                    <input class="infoUsuario" type="text" name="txtTelefono" id="idTelefono" value="<?php echo $this->usuario->getTelefono(); ?>">                            
    
                    <label for="idPais">Pais:</label>
                    <select class="infoUsuario" type="text" name="txtPais" id="idPais"></select> 

                    <label for="idDepartamento" id="lblDepa">Departamento:</label>
                    <select class="infoUsuario" type="text" name="txtDepartamento" id="idDepartamento"></select> 

                    <label for="idCiudad">Ciudad:</label>
                    <select class="infoUsuario" type="text" name="txtCiudad" id="idCiudad"></select>           

                    <label for="idDireccion">Direccion:</label>
                    <input class="infoUsuario" type="text" name="txtDireccion" id="idDireccion" value="<?php echo $this->usuario->getLugarEntrega()->getDireccion(); ?>">
                    
                </fieldset>
            
                <fieldset>
                    <legend>Seguridad</legend>
    
                    <label for="idContrasenia">Contraseña:</label>
                    <input class="infoUsuario" type="password" name="txtContrasenia" id="idContrasenia" value="<?php echo $this->usuario->getContrasennia(); ?>">
    
                    <label for="idslcTipoCuenta">Tipo de cuenta:</label>
                    <select class="infoUsuario" name="slcTipoCuenta" id="idslcTipoCuenta" value="<?php echo $this->usuario->getTipoUser(); ?>">
                        
                        <?php 
                            foreach($this->listaTipoUsua as $tipoUsuario)
                            {
                                $slc = '';
                                if($this->usuario->getTipoUser() == $tipoUsuario->getIdTipoUsuario())$slc = "Selected";
                                echo '<option value="'. $tipoUsuario->getIdTipoUsuario() .'" '. $slc .'> '. $tipoUsuario->getDescripcionTU() .' </option>';                                
                            }
                        ?>

                    </select>
                </fieldset>                    
            
            </fieldset>
            
            <fieldset id="fsModificar">
                <input class="botons" type="button" id="idbtnModificar" name="btnModificar" value="Modificar">                    
            </fieldset>                
        
            <fieldset id="fsAceptarCancelar">                    
                <input class="botons" type="submit" id="idbtnAceptar"  name="btnAceptar" value="Aceptar" >
                <input class="botons" type="reset" id="idbtnCancelar" name="btnancelar" value="Cancelar">
            </fieldset>                
    
        </form>
         
    </div>  

    <?php require 'views/footer.php'?> 

    <!--Js-->
    <script src="<?php echo constant('URL'); ?>public/js/helps.js"></script> 
    <script src="<?php echo constant('URL'); ?>public/js/InfoUsuario.js"></script>  
</body>
</html>