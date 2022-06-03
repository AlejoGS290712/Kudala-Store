<?php 

include_once 'models/obj/Usuario.php';

class LogRegUsuarioController extends Controller{    
    
    //Metodo Constructor
    function __construct()
    {
        parent::__construct();
        //Se carga el modelo usuario
        parent::loadModel("Usuario");        
        $this->sesion = new UserSession();
    }

    //Metodos
    //Esta funcion carga la vista de Login 
    function loadLogUsuario(){
        $this->view->render("LogUsuario/index");
    }

    //Esta funcion carga la vista de registro
    function loadRegUsuario(){
        $this->view->render("RegUsuario/index");
    }

    //Esta funcion permite iniciar sesion
    function iniciarSesion(){

        //Se obtienen los datos enviados por la vista        
        $this->model->usuario = new Usuario();
        $this->model->usuario->setCorreoUser  ($_POST['txtCorreo']);
        $this->model->usuario->setContrasennia($_POST['txtContrasennia']);
        
        
        //Se valida si fue posible loguear al usuario
        if (!$this->model->loguearUsuario()) {
            //Se envia el error del modelo hacia la vista
            $this->view->msjError = $this->model->msjError;
            //renderizamos la vista del controlador
            $this->view->render("LogUsuario/index");
            return;
        }

        //Se inicia la sesion
        $this->sesion->setUsuarioActual($this->model->usuario->getIdUsuario());   

        //Se limpia el objeto
        $this->model->usuario = null;          

        //Se redirecciona al inicio        
        $this->view->render('main/index');        
        
    }

    //Esta funcion registra el usuario en la bd
    function registrarUsuario(){
            
        //Se recibe la informacion de la vista
        $this->model->usuario = new Usuario();                        
        
        $this->model->usuario->setNombreUser  ($_POST['txtNombre']);
        $this->model->usuario->setApellidoUser($_POST['txtApellido']);
        $this->model->usuario->setCorreoUser  ($_POST['txtCorreo']);
        $this->model->usuario->setContrasennia($_POST['txtContrasennia']);

        //Se guarda en la BD
        if (!$this->model->RegistrarUsuario()){
                 
            $this->view->msjError = $this->model->msjError;                 
            $this->view->render("RegUsuario/index");
            return;
        } 
        
        //Se inicia la sesion
        $this->sesion->setUsuarioActual($this->model->usuario->getIdUsuario());        

        //Se limpia el objeto
        $this->model->usuario = null;                                 
        
        //Se redireccion al inicio        
        $this->view->render('main/index');    
                 
    } 

    //Esta funcion cierra la sesion del usuario
    function cerrarSesion(){
       
        $this->sesion->cerrarSesion();  
        $this->sesion = null;

        //Se redireccion al inicio 
        $this->view->render("main/index");                        
    }

}

?>