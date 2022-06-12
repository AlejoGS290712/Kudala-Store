<?php 

require 'models/obj/TipoDocumento.php';

class TipoDocumentoModel extends Model{

    function __construct()
    {
        parent::__construct();
    }

    //Este metodo busca todos los tipo de documento
    function BuscarTipoDoc()
    {
        try {

            //Se conecta con la base de datos
            $this->db->connect();

            //Se envia la instruccion
            $result = $this->db->conexion->query("CALL BuscarTipoDocGeneral ();");

            //Se valida si no ocurrio algun error desde la BD
            if ($this->db->conexion->error) {
                $this->msjError = "Error desde la BD: (". $this->db->conexion->error . ")";
                return false;
            }            

            //Se pasan los datos que se trajeron de la BD a una array de objetos 
            $this->listaTipoDoc=[];

            while($row = $result->fetch_assoc()){
                
                $objTipoDoc = new TipoDocumento();
                $objTipoDoc->setIdTipoDocumento($row['Codigo']);
                $objTipoDoc->setDescripcionTD($row['Descripcion']);
                
                $this->listaTipoDoc[] = $objTipoDoc;
            }

            //Se limpia el objeto
            $objTipoDoc = null;

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