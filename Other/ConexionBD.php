<?php 

class ConexionBD{
    private $conexion;
    private $resultado;

    //Info DB
    const HOST     = "127.0.0.1";
    const USERNAME = "root";
    const PASSWD   = "";
    const BDNAME   = "bdkudala";    
    
    //Metodos

    public function __construct()
    {
        //Se realiza la conexion a la BD
        $this->conexion = new mysqli ( self::HOST, self::USERNAME, self::PASSWD, self::BDNAME );

        //Se valida si fue posible hacer la conexion
        if ($this->conexion->connect_error) 
        {
            die("Conexion fallida: (" . $this->conexion->connect_error . ")");    
        }
        
    }

    public function mandarComandoSQL($strSQL){
        
        //Se envia la instruccion a la BD
        $this->resultado = $this->conexion->query($strSQL);

        //Se valida si no ocurrio un error        
        if ($this->conexion->connect_error) 
        {
            die("Error al enviar instruccion: (" . $this->conexion->connect_error . ")");    
        }

        //Se cierra la conexion a la BD
        $this->conexion->close();
        
        //Se retorna el resultado de la instruccion enviada
        return $this->resultado;
    }

    //Getter    

    /**
     * Get the value of resultado
     */ 
    public function getResultado()
    {
        return $this->resultado;
    }
}

?>