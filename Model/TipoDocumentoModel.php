<?php 

class TipoDocumentoModel{
    
    //Atributos
    private $idTipoDocumento;
    private $descripcionTD;

    //Metodos
    public function __construct($idTipoDocumento,$descripcionTD)
    {
        $this->idTipoDocumento = $idTipoDocumento;
        $this->descripcionTD   = $descripcionTD ;
    }

    
    //Setters and Getters

    /**
     * Get the value of idTipoDocumento
     */ 
    public function getIdTipoDocumento()
    {
        return $this->idTipoDocumento;
    }

    /**
     * Set the value of idTipoDocumento
     *
     * @return  self
     */ 
    public function setIdTipoDocumento($idTipoDocumento)
    {
        $this->idTipoDocumento = $idTipoDocumento;

        return $this;
    }

    /**
     * Get the value of descripcionTD
     */ 
    public function getDescripcionTD()
    {
        return $this->descripcionTD;
    }

    /**
     * Set the value of descripcionTD
     *
     * @return  self
     */ 
    public function setDescripcionTD($descripcionTD)
    {
        $this->descripcionTD = $descripcionTD;

        return $this;
    }
}

?>