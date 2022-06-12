<?php 
    include 'libs/UserSession.php';

    class Controller
    {
        function __construct()
        {            
            $this->view = new View();
        }

        //Este metodo carga un modelo para el controllador
        function loadModel($model){
            //Se crea la ubicacion del modelo
            $url = 'models/'.$model.'Model.php';

            //Se valida si existe un archivo con esa ubicacion
            if (file_exists($url)) {
                require $url;

                $modelName = $model.'Model';
                $this->model = new $modelName();
            }
        }

        function alerta($msj){
            echo "<script>alert('". $msj ."')</script>";
        }        

    }

?>