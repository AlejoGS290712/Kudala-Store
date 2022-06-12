<?php 

    include_once 'models/obj/Usuario.php';

    class ProductoController extends Controller
    {
        function __construct()
        {
            parent::__construct();  
            $this->sesion = new UserSession();                    
        }

        function buscarProducto(){
            
            //Se crea el objeto donde se va almacenar la informacion
            parent::loadModel("Usuario");
            $this->model->usuario = new Usuario();

            //Se obtiene la id del usuario actual        
            if(!$this->sesion->getUsuarioActual()){
                $this->view->msjError = $this->sesion->msjError;
                $this->view->render("LogUsuario/index");
                return;
            }

            $this->idUsuario = $this->sesion->idUsuario;

            //Se valida si fue posible buscar el usuario
            if (!$this->model->buscarUsuario($this->idUsuario)){
                    
                $this->view->msjError = $this->model->msjError;                 
                $this->view->render("errores/index");
                return;
            }

            //Se envia el usuario a la vista para que se pueda imprimir la informacion
            $this->view->usuario = $this->model->usuario;

            //Se limpia el objeto
            $this->model->usuario = null;

            //Se renderiza la vista
            $this->view->render("InfoProducto/index");
        }
    }

?>