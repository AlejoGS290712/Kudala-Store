<?php 

require 'models/obj/TipoTelefono.php';

class TipoTelefonoModel extends Model{

    function __construct()
    {
        parent::__construct();
    }

    //Este metodo busca todos los tipo de telefono
    function BuscarTipoTel()
    {
        try {

            //Se conecta con la base de datos
            $this->db->connect();

            //Se envia la instruccion
            $result = $this->db->conexion->query("CALL BuscarTipoTelGeneral();");

            //Se valida si no ocurrio algun error desde la BD
            if ($this->db->conexion->error) {
                $this->msjError = "Error desde la BD: (". $this->db->conexion->error . ")";
                return false;
            }            

            //Se pasan los datos que se trajeron de la BD a una array de objetos 
            $this->listaTipoTel=[];

            while($row = $result->fetch_assoc()){
                
                $objTipoTel = new TipoTelefono();
                $objTipoTel->setIdTipoTel($row['Codigo']);
                $objTipoTel->setDescripcionTT($row['Descripcion']);
                
                $this->listaTipoTel[] = $objTipoTel;
            }

            //Se limpia el objeto
            $objTipoTel = null;

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