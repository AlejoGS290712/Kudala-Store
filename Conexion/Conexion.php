<?php
    class Conexion{

    /**
     *  Atributo en cual se almacena la conexion a la Bade de Datos
     */
    private $conn = null;

    /**
     *  Este metodo crea el constructor de la clase Conexion
     */
    public function __construct(){

        include("config.php");

        $this->conn = new mysqli($serv, $user, $pass, $namedb);

        if ($this->conn->connect_errno) {
            echo "Error MySQLi: ". $this->conn->connect_error;
            exit();
        }
        $this->conn->set_charset("utf8");
    }

    /**
     *  Este metodo es el destructor de la clase Conexion
     */
    public function __destruct(){
        $this->CloseDB();
    }

    //Getters

     /**
     * Get the value of Conexion
     */ 
    public function getConexion(){
        return $this->conn;
    }

    /**
     * Este metodo sirve para mostrar el resultado de un select
     *
     * @return result
     */
    public function select($qry){
        $result = $this->conn->query($qry);
        return $result;
    }

     /**
     *  Este metodo sirve para realizar una conexion a otra base de datos
     */
    public function select_db($db){
      return $this->conn->select_db($db);
    }

    /**
     *  La funcion devuelve el ID generado por un query en una tabla con una columna que tenga el atributo AUTO_INCREMENT.
     */
    //metodo para regresar ultimo id
    public function insert_id(){
      return $this->conn->insert_id;
    }

    /**
     *  Este metodo realiza los query INSERT, UPDATE y DELETE
     * 
     *  @return true o false dependiendo el caso
     */
    public function query($qry){
        if(!$this->conn->query($qry)){
            return false;
        }else{
            return true;
        }
        return null;
    }

     /**
     *  Este metodo cierra la Bade de datos que se está utilizando
     */
    public function CloseDB(){
        $this->conn->close();
    }

}
?>