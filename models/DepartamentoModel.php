<?php 

require 'models/obj/Departamento.php';

class DepartamentoModel extends Model{

    function __construct()
    {
        parent::__construct();
    }

    //Este metodo busca todos Departamentos
    function BuscarDepartamentos($idPais)
    {
        try {

            //Se conecta con la base de datos
            $this->db->connect();

            //Se envia la instruccion
            $result = $this->db->conexion->query("CALL BuscarDepartamentoGeneral('". $idPais ."');");

            //Se valida si no ocurrio algun error desde la BD
            if ($this->db->conexion->error) {
                $this->msjError = "Error desde la BD: (". $this->db->conexion->error . ")";
                return false;
            }            

            //Se pasan los datos que se trajeron de la BD a una array de objetos 
            $this->listaDepartamentos=[];

            while($row = $result->fetch_assoc()){
                
                $objDepartamento = new Departamento();                

                $objDepartamento->setIdDepartamento($row['Codigo']);
                $objDepartamento->setDescripcionDep($row['Descripcion']);                
                
                //Se almacena en la array
                $this->listaDepartamentos[] = $objDepartamento;
            }

            //Se limpia el objeto
            $objDepartamento = null;

            //Se cierra la conexcion a la bd
            $this->db->conexion->close();        
            return true;

        }catch (Exception $e) {
            $this->msjError = "Error al buscar el Departamento : (Ct: ". $e->getMessage() .")";
            return false;
        }
    }
}

?>