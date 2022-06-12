<?php 

include_once 'models/obj/Usuario.php';


class InfoUsuarioController extends Controller{

    //Metodo Constructor
    function __construct()
    {
        parent::__construct();        
        //Se carga el modelo usuario
        parent::loadModel("Usuario");
        $this->sesion = new UserSession();
    }
    
    //Esta funcion carga la vista de registro
    function loadCuentaUsuario(){
        $this->view->render("InfoUsuario/index");
    }
    
    //Esta funcion busca el usuario y muestra todos sus datos en la vista Info usuario
    function BuscarUsuario(){        

        //Se crea el objeto donde se va almacenar la informacion
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

        //Se busca la informacion de los DropDownList
        $this->buscarInfoDropDownList();

        //Se renderiza la vista
        $this->loadCuentaUsuario();
    }
    
    //Esta funcion busca la informacion de los DropDownList
    function buscarInfoDropDownList()
    {
        //Se carga el modelo del tipo de documento
        parent::loadModel("TipoDocumento");

        //Se busca la informacion del tipo de documento        
        if (!$this->model->BuscarTipoDoc()){                 
            $this->view->msjError = $this->model->msjError;                 
            $this->view->render("errores/index");
            return;
        }
        //Se envia la informacion del TipoDoc a la vista
        $this->view->listaTipoDoc = $this->model->listaTipoDoc;

        //Se limpia la lista de objetos
        $this->model->listaTipoDoc = null;


        //Se carga el modelo del tipo de Telefono
        parent::loadModel("TipoTelefono");

        //Se busca la informacion del tipo de Telefono        
        if (!$this->model->BuscarTipoTel()){                 
            $this->view->msjError = $this->model->msjError;                 
            $this->view->render("errores/index");
            return;
        }
        //Se envia la informacion del TipoTel a la vista
        $this->view->listaTipoTel = $this->model->listaTipoTel;

        //Se limpia la lista de objetos
        $this->model->listaTipoTel = null;


        //Se carga el modelo del tipo de Usuario
        parent::loadModel("TipoUsuario");

        //Se busca la informacion del tipo de Usuario       
        if (!$this->model->BuscarTipoUsuario()){                 
            $this->view->msjError = $this->model->msjError;                 
            $this->view->render("errores/index");
            return;
        }
        //Se envia la informacion del TipoUsua a la vista
        $this->view->listaTipoUsua = $this->model->listaTipoUsua;

        //Se limpia la lista de objetos
        $this->model->listaTipoUsua = null;


        

    }


    /*
    Esta funcion busca una lista de paises y lo retorna una cadena de texto,
    esta informacion luego es interpretada por Js por medio del AJAX
    */
    function buscarPaises()
    {
        try {
            $listaPaisestxt = "";

            //Se carga el modelo Pais
            parent::loadModel("Pais");

            //Se busca la informacion de Pais       
            if (!$this->model->BuscarPaises()){                 
                echo "Error: " . $this->model->msjError;                 
                return;
            }

            //Se convierte la array en una linea de texto de tipo: (value1=text1:value2=text2:value3=text3,...)
            foreach($this->model->listaPaises as $paises){

                if($listaPaisestxt === ""){
                    $listaPaisestxt = $paises->getIdPais() . "=" . $paises->getDescripcionPais(); 
                }else{
                    $listaPaisestxt .= ":" . $paises->getIdPais() . "=" . $paises->getDescripcionPais();
                }                        
            }

            //Se limpia la lista de objetos
            $this->model->listaPaises = null;        

            //Se envia la informacion del Pais
            echo $listaPaisestxt;

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();                 
            return;
        }

    }


    /*
    Esta funcion busca una lista de departamentos por pais y lo retorna una cadena de texto con 
    esta informacion luego es interpretada por Js por medio del AJAX
    */
    function buscarDepartamentosPorPais($param = null)
    {
        $idPais = $param[0];
        $listaDepartamentos = "";

        //Se carga el modelo Departamento
        parent::loadModel("Departamento");

        //Se valida si fue posible buscar los departamentos       
        if (!$this->model->BuscarDepartamentos($idPais)){                 
            echo "Error: " .$this->model->msjError;                 
            return;
        }

        //Se convierte la array en una linea de texto de tipo: (value1=text1:value2=text2:value3=text3,...)
        foreach($this->model->listaDepartamentos as $departamento){

            if($listaDepartamentos === ""){
                $listaDepartamentos = $departamento->getIdDepartamento() . "=" . $departamento->getDescripcionDep(); 
            }else{
                $listaDepartamentos .= ":" . $departamento->getIdDepartamento() . "=" . $departamento->getDescripcionDep();
            }                        
        }

        //Se limpia la lista de objetos
        $this->model->listaDepartamentos = null;

        //Se envia la informacion del Departamento
        echo $listaDepartamentos;

    }

    /*
    Esta funcion busca una lista de Ciudades por Departamento y lo retorna una cadena de texto
    esta informacion luego es interpretada por Js por medio del AJAX
    */
    function buscarCiudadesPorDepartamento($param = null)
    {          
        $idDepartamento = $param[0];
        $listaCiudades = "";

        //Se carga el modelo Ciudad
        parent::loadModel("Ciudad");

        //Se valida si fue posible buscar los Ciudadades       
        if (!$this->model->BuscarCiudades($idDepartamento)){                 
            echo "Error: " . $this->model->msjError;                             
            return;
        }

        //Se convierte la array en una linea de texto de tipo: (value1=text1:value2=text2:value3=text3,...)
        foreach($this->model->listaCiudades as $Ciudad){

            if($listaCiudades === ""){
                $listaCiudades = $Ciudad->getIdCiudad() . "=" . $Ciudad->getDescripcionCIU(); 
            }else{
                $listaCiudades .= ":" . $Ciudad->getIdCiudad() . "=" . $Ciudad->getDescripcionCIU();
            }                        
        }

        //Se limpia la lista de objetos
        $this->model->listaCiudades = null;

        //Se envia la informacion de la ciudad
        echo $listaCiudades;
    }
}

?>