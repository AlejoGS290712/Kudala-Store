<?php 

class Categoria{

    //Atributos
    private $idCategoria;
    private $descripcionCat;

    //Metodos
    public function __construct($idCategoria, $descripcionCat)
    {
        $this->idCategoria = $idCategoria;
        $this->descripcionCat = $descripcionCat;
    }

    //Setters and Getters
    
    /**
     * Get the value of idCategoria
     */ 
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Get the value of descripcionCat
     */ 
    public function getDescripcionCat()
    {
        return $this->descripcionCat;
    }

     /**
     * Set the value of idCategoria
     *
     * @return  self
     */ 
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Set the value of descripcionCat
     *
     * @return  self
     */ 
    public function setDescripcionCat($descripcionCat)
    {
        $this->descripcionCat = $descripcionCat;

        return $this;
    }

}

?>
