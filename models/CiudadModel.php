<?php 

require 'models/obj/Ciudad.php';

class CiudadModel extends Model{

    function __construct()
    {
        parent::__construct();
    }

    //Este metodo busca todas las Ciudades
    function BuscarCiudades($idDepartamento)
    {
        try {

            //Se conecta con la base de datos
            $this->db->connect();

            //Se envia la instruccion
            $result = $this->db->conexion->query("CALL BuscarCiudadGeneral('". $idDepartamento ."');");

            //Se valida si no ocurrio algun error desde la BD
            if ($this->db->conexion->error) {
                $this->msjError = "Error desde la BD: (". $this->db->conexion->error . ")";
                return false;
            }            

            //Se pasan los datos que se trajeron de la BD a una array de objetos 
            $this->listaCiudades=[];

            while($row = $result->fetch_assoc()){
                
                $objCiudad = new Ciudad();
                $objCiudad->setIdCiudad      ($row['Codigo']);
                $objCiudad->setDescripcionCIU($row['Descripcion']);
                
                $this->listaCiudades[] = $objCiudad;
            }            

            //Se limpia el objeto
            $objCiudad = null;

            //Se cierra la conexcion a la bd
            $this->db->conexion->close(); 

            return $this->listaCiudades;

        }catch (Exception $e) {
            $this->msjError = "Error al buscar el Ciudad : (Ct: ". $e->getMessage() .")";
            return false;
        }
    }
}

?>