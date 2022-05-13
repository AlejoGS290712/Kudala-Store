<?php 

class CiudadModel{

    //Atributos
    private $idCiudad;
    private $descripcionCIU;
    private $departamento;

    //Metodos
    public function __construct($descripcionCIU,$departamento)
    {
        $this->descripcionCIU = $descripcionCIU;
        $this->departamento   = $departamento;
    }

    //Setters and Getters
    
    /**
     * Get the value of idCiudad
     */ 
    public function getIdCiudad()
    {
        return $this->idCiudad;
    }

    /**
     * Get the value of descripcionCIU
     */ 
    public function getDescripcionCIU()
    {
        return $this->descripcionCIU;
    }

    /**
     * Set the value of descripcionCIU
     *
     * @return  self
     */ 
    public function setDescripcionCIU($descripcionCIU)
    {
        $this->descripcionCIU = $descripcionCIU;

        return $this;
    }

    /**
     * Get the value of departamento
     */ 
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set the value of departamento
     *
     * @return  self
     */ 
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }
}

?>