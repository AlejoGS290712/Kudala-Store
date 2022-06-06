<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/CSS/header.css">
</head>
<body>    
    <nav class="navbar navbar-expand-lg" style="background-color: #ec7c26;">
        <div class="container-fluid p-2">    

            <!--Items generales-->
            <div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="<?php echo constant('URL'); ?>Main">Inicio</a></li>                                
                    <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL'); ?>">Explorar</a></li> 
                    <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL'); ?>">Nosotros</a></li> 
                    <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL'); ?>">Servicio al cliente</a></li> 
                </ul>
            </div>            
                        
            <div class="">
                <form class="d-flex" style="margin: 0;">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">                    
                    <button class="btn" type="submit"><img src="<?php echo constant('URL');?>/public/Img/busqueda.png" alt=""></button>
                </form> 
            </div>              

            <div>
                <!--Items Inicio Sesion y Registro-->
                <div id="MnLogReg" style="display: inherit;">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL'); ?>LogRegUsuario/loadLogUsuario">Iniciar Sesion</a></li>
                        <li class="nav-item py-1 col-12 col-lg-auto">
                            <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                            <hr class="d-lg-none text-white-50">
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo constant('URL'); ?>LogRegUsuario/loadRegUsuario">Registrar</a></li>
                    </ul>
                </div>                

                <!-- Menu de Usuario -->
                <div id="MnUsuario" class="dropdown" style="display: none;"> 
                
                    <a type="button" href="" style="margin-right: 10px ;">
                        <img src="<?php echo constant('URL'); ?>public/Img/carritoCompras.png">
                    </a>

                    <a type="button" id="dropdownMenuUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="user" src="<?php echo constant('URL'); ?>public/Img/IconUser.png">
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuUser">

                        <li><a class="dropdown-item" href="<?php echo constant('URL'); ?>InfoUsuario/buscarUsuario">Mi Cuenta</a></li>
                        <li><a class="dropdown-item" href="">Idioma</a></li>
                        <li><a class="dropdown-item" href="">Pedidos</a></li>
                        <li><a class="dropdown-item" href="">Devoluciones</a></li>
                        <li><a class="dropdown-item" href="">Historial</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a id="opcCerrarSesion" class="dropdown-item" href="<?php echo constant('URL'); ?>LogRegUsuario/cerrarSesion">Cerrar Sesion</a></li>

                    </ul>
                </div>
            </div>            
        </div>
    </nav>
</body>

<script src="<?php echo constant('URL'); ?>public/js/header.js"></script>

</html>