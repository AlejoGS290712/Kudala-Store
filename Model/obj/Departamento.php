<?php 

class DepartamentoModel{

    //Atributos
    private $idDepartamento;
    private $descripcionDep;
    private $pais;

    //Metodos
    public function __construct($descripcionDep, $pais)
    {
        $this->descripcionDep = $descripcionDep;
        $this->pais           = $pais;
    }

    //Setters and Getters

    /**
     * Get the value of idDepartamento
     */ 
    public function getIdDepartamento()
    {
        return $this->idDepartamento;
    }

    /**
     * Get the value of descripcionDep
     */ 
    public function getDescripcionDep()
    {
        return $this->descripcionDep;
    }

    /**
     * Set the value of descripcionDep
     *
     * @return  self
     */ 
    public function setDescripcionDep($descripcionDep)
    {
        $this->descripcionDep = $descripcionDep;

        return $this;
    }

    /**
     * Get the value of pais
     */ 
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     *
     * @return  self
     */ 
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }
}

?>