<?php 

class TipoUsuario{
    
    //Atributos
    private $idTipoUsuario;
    private $descripcionTU;

    //Metodos
    public function __construct()
    {                
    }    
    
    //Setters and Getters
    
    /**
     * Get the value of idTipoUsuario
     */ 
    public function getIdTipoUsuario()
    {
        return $this->idTipoUsuario;
    }    

    /**
     * Set the value of idTipoUsuario
     *
     * @return  self
     */ 
    public function setIdTipoUsuario($idTipoUsuario)
    {
        $this->idTipoUsuario = $idTipoUsuario;

        return $this;
    }

    /**
     * Get the value of descripcionTU
     */ 
    public function getDescripcionTU()
    {
        return $this->descripcionTU;
    }

    /**
     * Set the value of descripcionTU
     *
     * @return  self
     */ 
    public function setDescripcionTU($descripcionTU)
    {
        $this->descripcionTU = $descripcionTU;

        return $this;
    }

}

?>