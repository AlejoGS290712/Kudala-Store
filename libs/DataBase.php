<?php 

class DataBase{
    private $host;
    private $db;
    private $user;
    private $password;

    public function __construct()
    {
        $this->host     = constant('HOST');        
        $this->user     = constant('USERNAME');
        $this->password = constant('PASSWD');
        $this->db       = constant('BDNAME');
    }

    public function connect(){        
        try {
            //Se realiza la conexion a la BD
            $this->conexion = new mysqli ( $this->host, $this->user, $this->password, $this->db);

            //Se valida si fue posible hacer la conexion
            if ($this->conexion->connect_error) 
            {
                print_r("Conexion fallida: " . $this->conexion->connect_error);    
            }

            
        } catch (Exception $e) {
            print_r("Conexion a la BD, fallida: (" . $e->getMessage() .")");
        }
    }

}

?>