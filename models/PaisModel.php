<?php 

require 'models/obj/Pais.php';

class PaisModel extends Model{

    function __construct()
    {
        parent::__construct();
    }

    //Este metodo busca todos Paises
    function BuscarPaises()
    {
        try {

            //Se conecta con la base de datos
            $this->db->connect();

            //Se envia la instruccion
            $result = $this->db->conexion->query("CALL BuscarPaisGeneral();");

            //Se valida si no ocurrio algun error desde la BD
            if ($this->db->conexion->error) {
                $this->msjError = "Error desde la BD: (". $this->db->conexion->error . ")";
                return false;
            }            

            //Se pasan los datos que se trajeron de la BD a una array de objetos 
            $this->listaPaises=[];

            while($row = $result->fetch_assoc()){
                
                $objPais = new Pais();
                                                
                $objPais->setIdPais($row['Codigo']);
                $objPais->setDescripcionPais($row['Descripcion']);   
                
                //Se almacena en la array
                $this->listaPaises[] = $objPais;
            }

            //Se limpia el objeto
            $objPais = null;

            //Se cierra la conexcion a la bd
            $this->db->conexion->close();        
            return true;

        }catch (Exception $e) {
            $this->msjError = "Error al buscar el Pais : (Ct: ". $e->getMessage() .")";
            return false;
        }
    }
}

?>