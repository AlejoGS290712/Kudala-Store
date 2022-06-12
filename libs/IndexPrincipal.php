<?php 
    require 'controllers/ErroresController.php';

    class IndexPrincipal{

        /*
        Este constructor permite separar la informacion de la URL en dos partes:
            -La primer: A un controlador.
            -El segundo: A un metodo de ese controlador.
        */

        function __construct()
        {            
            //Se obtiene la informacion de la url(si existe), Sino retorna null
            $url = isset($_GET['url']) ? $_GET['url']: null;
            //Elimina los "/" innecesarias
            $url = rtrim($url,'/');
            //Separa la informacion de la url en una array
            $url = explode('/',$url);
            
            //En caso que este vacia la URL se manda a la pagina principal
            if(empty($url[0])){                
                require_once 'controllers/MainController.php';
                $controller = new MainController();
                $controller->loadModel('main');
                $controller->render();
                return false;  
            }

            //En caso contrario.
            //Se crea la ubicacion del controlador 
            $nomController = $url[0].'Controller';
            $archivoController = 'controllers/'. $nomController.'.php';

            //Si existe un archivo con esa ruta se crea el controlador, sino se muestra un mensaje de error
            if (file_exists($archivoController)) {
                require_once $archivoController;
                $controller = new $nomController;
                $controller->loadModel($url[0]);

                //Se valida si hay referencia a un metodo en la URL, si si se invoca a este y se envian los parametros si existen
                $nparam = sizeof($url);

                if($nparam > 1){
                    if($nparam > 2){
                        $param = [];
                        for($i = 2; $i<$nparam; $i++){
                            array_push($param, $url[$i]);
                        }
                        $controller->{$url[1]}($param);
                    }else{
                        $controller->{$url[1]}();
                    }
                }else{
                    $controller->render($url[0]);
                }
            }else{                
                $controller = new ErroresController("Hubo un error en la solicitud, o no existe la pagina");                                
            }

        }

    }

?>