<?php 

require 'models/LugarEntregaModel.php';

class UsuarioModel extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function RegistrarUsuario(){
        
        try {
            //Se conecta a la base de datos
            $this->db->connect();
            
            //Se crea el comando sql
            $strSQL = "CALL RegistrarUsuario('". $this->usuario->getNombreUser() ."', '". $this->usuario->getApellidoUser() ."', '". $this->usuario->getCorreoUser() ."', '". $this->usuario->getContrasennia() ."');";
            
            //Insertar los datos a la BD        
            $result = $this->db->conexion->query($strSQL);        
            
            //Se valida si ocurrio un error
            if($this->db->conexion->error){
                $this->msjError = "Error al guardar un nuevo Usuario: cx: (". $this->db->conexion->error .")";
                return false;
            }                        

            //Se valida si la BD devuelve un error
            $row = $result->fetch_assoc();
            
            if (($row['Rpta']) < 0) {                
                $this->msjError = "Este correo ya existe, por favor ingrese uno nuevo";
                return false;
            }
            
            $this->usuario->setIdUsuario($row["Rpta"]);
            //Se cierra la conexion
            $this->db->conexion->close(); 
            return true;   

        } catch (Exception $e) {
            $this->msjError = "Error al guardar un nuevo Usuario : (Ct: ". $e->getMessage() .")";
            return false;
        }    
    }

    //Esta funcion consulta con la BD si el usuario con correo y contraseña existe
    function loguearUsuario(){
        
        try {
            //Se conecta con la base de datos
            $this->db->connect();

            //Se envia la instruccion
            $result = $this->db->conexion->query("CALL LoginUsuario('". $this->usuario->getCorreoUser() ."','". $this->usuario->getContrasennia() ."');");

            //Se valida si no ocurrio algun error
            if ($this->db->conexion->error) {
                $this->msjError = "Ocurrio un error al consultar la BD: (". $this->db->conexion->error . ")";
                return false;
            }

            //Segun el resultado de la consulta a la bd, validamos si la informacion ingresada fue correcta y se almacena en el obj Usuario
            $row = $result->fetch_assoc();
            if($row["Rpta"] < 0){
                $this->msjError = "El correo o contraseña son incorrectos";
                return false;
            }            
            $this->usuario->setIdUsuario($row["Rpta"]);            

            //Se cierra la conexcion a la bd
            $this->db->conexion->close();        
            return true;

        }catch (Exception $e) {
            $this->msjError = "Error al guardar un nuevo Usuario : (Ct: ". $e->getMessage() .")";
            return false;
        }
    }

    //Esta funcion trae la informacion del usuario con su id desde la BD
    function buscarUsuario($idUsuario){
        try {
            //Se conecta con la base de datos
            $this->db->connect();

            //Se envia la instruccion
            $result = $this->db->conexion->query("CALL BuscarUsuarioPorId('". $idUsuario ."');");

            //Se valida si no ocurrio algun error
            if ($this->db->conexion->error) {
                $this->msjError = "Error desde la BD: (". $this->db->conexion->error . ")";
                return false;
            }
            
            //Segun el resultado de la consulta a la bd, validamos si la informacion ingresada fue correcta y se almacena en el obj Usuario
            $row = $result->fetch_assoc();
            
            if($row == null){
                $this->msjError = "No se encontro el usuario con ID: ". $idUsuario;
                return false;
            }       

            //Se pasa la informacion de la BD al objeto Usuario     
            $this->usuario->setIdUsuario   ($idUsuario);
            $this->usuario->setTipoDoc     ($row["TipoDocumento"]);
            $this->usuario->setDocumento   ($row["NroDocumento"]);
            $this->usuario->setTipoUser    ($row["TipoUsuario"]);
            $this->usuario->setNombreUser  ($row["Nombre"]);
            $this->usuario->setApellidoUser($row["Apellido"]);
            $this->usuario->setCorreoUser  ($row["Correo"]);
            $this->usuario->setContrasennia($row["Contrasennia"]);
            $this->usuario->setTipoTel     ($row["TipoTel"]);
            $this->usuario->setTelefono    ($row["NroTelefono"]);
            $this->usuario->setValorCred   ($row["VrCredito"]);
            
            //Se tra la informacion del lugar de entrega
            $objLugarEntrega = new LugarEntregaModel();
            $this->usuario->setLugarEntrega($objLugarEntrega->BuscarLugarEntrega($idUsuario));

            //Se cierra la conexcion a la bd
            $this->db->conexion->close();        
            return true;

        }catch (Exception $e) {
            $this->msjError = "Error al buscar el Usuario : (Ct: ". $e->getMessage() .")";
            return false;
        }
    }
}

?>