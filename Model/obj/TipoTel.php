<?php 

class TipoTelModel{
    //Atributos
    private $idTipoTel;
    private $descripcionTT;

    //Metodos
    public function __construct($idTipoTel,$descripcionTT)
    {
        $this->idTipoTel = $idTipoTel;
        $this->descripcionTT = $descripcionTT;
    }

    
    
    //Setters and Gettes    

    /**
     * Get the value of idTipoTel
     */ 
    public function getIdTipoTel()
    {
        return $this->idTipoTel;
    }

    /**
     * Set the value of idTipoTel
     *
     * @return  self
     */ 
    public function setIdTipoTel($idTipoTel)
    {
        $this->idTipoTel = $idTipoTel;

        return $this;
    }

    /**
     * Get the value of descripcionTT
     */ 
    public function getDescripcionTT()
    {
        return $this->descripcionTT;
    }

    /**
     * Set the value of descripcionTT
     *
     * @return  self
     */ 
    public function setDescripcionTT($descripcionTT)
    {
        $this->descripcionTT = $descripcionTT;

        return $this;
    }
}

?>