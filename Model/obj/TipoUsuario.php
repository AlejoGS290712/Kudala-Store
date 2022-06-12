<?php 

class TipoUsuarioModel{
    
    //Atributos
    private $idTipoUsuario;
    private $descripcionTU;

    //Metodos
    public function __construct($descripcionTU)
    {        
        $this->descripcionTU = $descripcionTU;
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