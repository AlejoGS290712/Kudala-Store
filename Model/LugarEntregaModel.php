<?php 

class LugarEntregaModel{

    //Atributos
    private $idLugarEntrega;
    private $usuario;
    private $ciudad;
    private $direccion;

    //Metodos
    public function __construct($usuario, $ciudad, $direccion)
    {        
        $this->usuario        = $usuario;
        $this->ciudad         = $ciudad;
        $this->direccion      = $direccion;
    }

    //Setters and Getters
    
    /**
     * Get the value of idLugarEntrega
     */ 
    public function getIdLugarEntrega()
    {
        return $this->idLugarEntrega;
    }

    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get the value of ciudad
     */ 
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set the value of ciudad
     *
     * @return  self
     */ 
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get the value of direccion
     */ 
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */ 
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }
}

?>