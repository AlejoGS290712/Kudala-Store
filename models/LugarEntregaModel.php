<?php 

require 'models/obj/LugarEntrega.php';

class LugarEntregaModel extends Model{

    function __construct()
    {
        parent::__construct();
    }

    //Este metodo busca todos los Lugares de entrega
    function BuscarLugarEntrega($idUsuario)
    {
        try {

            //Se conecta con la base de datos
            $this->db->connect();

            //Se envia la instruccion
            $result = $this->db->conexion->query("CALL BuscarLugarEntregaGeneral('". $idUsuario ."');");

            //Se valida si no ocurrio algun error desde la BD
            if ($this->db->conexion->error) {
                $this->msjError = "Error desde la BD: (". $this->db->conexion->error . ")";
                return false;
            }            

            //Se pasan los datos que se trajeron de la BD a un objeto            
            $row = $result->fetch_assoc();            

            $objLugEntrega = new LugarEntrega();

            //Si no se encuentra lugar de entega para el usuario se retorna un objLugarEntrega vacio
            if($row == null){
                return $objLugEntrega;
            }  

            $objLugEntrega->setIdLugarEntrega($row['Codigo']);
            $objLugEntrega->setUsuario       ($idUsuario);                
            $objLugEntrega->setCiudad        ($row['Ciudad']);
            $objLugEntrega->setDireccion     ($row['Direccion']);
                                    
            //Se cierra la conexcion a la bd
            $this->db->conexion->close();        
            return $objLugEntrega;

        }catch (Exception $e) {
            $this->msjError = "Error al buscar el Lugar de entrega : (Ct: ". $e->getMessage() .")";
            return false;
        }
    }
}

?>