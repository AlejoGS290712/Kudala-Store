<?php 

require 'models/obj/TipoUsuario.php';

class TipoUsuarioModel extends Model{

    function __construct()
    {
        parent::__construct();
    }

    //Este metodo busca todos los tipo de Usuario
    function BuscarTipoUsuario()
    {
        try {

            //Se conecta con la base de datos
            $this->db->connect();

            //Se envia la instruccion
            $result = $this->db->conexion->query("CALL BuscarTipoUsuarioGeneral();");

            //Se valida si no ocurrio algun error desde la BD
            if ($this->db->conexion->error) {
                $this->msjError = "Error desde la BD: (". $this->db->conexion->error . ")";
                return false;
            }            

            //Se pasan los datos que se trajeron de la BD a una array de objetos 
            $this->listaTipoUsua=[];

            while($row = $result->fetch_assoc()){
                
                $objTipoUsua = new TipoUsuario();
                $objTipoUsua->setIdTipoUsuario($row['Codigo']);
                $objTipoUsua->setDescripcionTU($row['Descripcion']);
                
                $this->listaTipoUsua[] = $objTipoUsua;
            }

            //Se limpia el objeto
            $objTipoUsua = null;

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