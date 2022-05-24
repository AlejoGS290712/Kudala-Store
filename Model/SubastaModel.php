<?php 
	class SubastaModel
 {
    private $idSubasta;
    private $idProducto;
    private $valorInicial;
    private $valorFinal; 
    private $activa; 
    private $ganador; 


     /* Este metodo crea una subasta con los datos requeridos
     *
     * <b>Pre-condiciones</b>:Deben haber datos
     * requeridos.<b>Pos-condiciones</b>:Se agrega una nueva subasta al sistema.
     *
     * @param idSubasta es el numero de identificacion de la subasta
     * @param idProducto es el numero de identificacion del producto
     * @param valorInicial es el valor inicial con el que comienza la subasta
     * @param valorFinal es el valor final con el que termina la subasta
     * @param activa es el estado en el que está la subasta
     * @param ganador es el usuario ganador de la subasta
     */
    
    public function __construct( $idSubasta, $idProducto, $valorInicial, $valorFinal, $activa, $ganador )
    {
        $this->idSubasta = $idSubasta;
        $this->idProducto = $idProducto;
        $this->valorInicial = $valorInicial;
        $this->valorFinal = $valorFinal;
        $this->activa = $activa;
        $this->ganador = $ganador;
    }

    /**
     * Este método permite crear una oferta en el sistema.
     * <b> pre-condición </b> : Ya se debe haber verificado que el ingreso al sistema
     * <b> post-condición </b> : Se crea una subasta con éxito y se almacena.
     */
    public function IngresarDatos($idSubasta, $idProducto, $valorInicial) {

        this->idSubasta = $idSubasta;
        this->idProducto = $idProducto;
        this->valorInicial = $valorInicial;
        this->valorFinal = $valorInicial;
        this->activa = true;
        this->ganador = null;
    }

 //Setters y Getters

    /**
     * Get the value of idSubasta
     */ 
    public function getIdSubasta()
    {
        return $this->idSubasta;
    }

    /**
     * Set the value of idSubasta
     *
     * @return  self
     */ 
    public function setIdSubasta($idSubasta)
    {
        $this->idSubasta = $idSubasta;

        return $this;
    }

    /**
     * Get the value of idProducto
     */ 
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * Set the value of idProducto
     *
     * @return  self
     */ 
    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get the value of valorInicial
     */ 
    public function getValorInicial()
    {
        return $this->valorInicial;
    }

    /**
     * Set the value of valorInicial
     *
     * @return  self
     */ 
    public function setValorInicial($valorInicial)
    {
        $this->valorInicial = $valorInicial;

        return $this;
    }

	/**
     * Get the value of valorFinal
     */ 
    public function getValorFinal()
    {
        return $this->valorFinal;
    }

    /**
     * Set the value of valorFinal
     *
     * @return  self
     */ 
    public function setValorFinal($valorFinal)
    {
        $this->valorFinal = $valorFinal;

        return $this;
    }

    /**
     * Get the value of activa
     */ 
    public function getActiva()
    {
        return $this->activa;
    }

    /**
     * Set the value of activa
     *
     * @return  self
     */ 
    public function setActiva($activa)
    {
        $this->activa = $activa;

        return $this;
    }

    /**
     * Get the value of ganador
     */ 
    public function getGanador()
    {
        return $this->ganador;
    }

    /**
     * Set the value of ganador
     *
     * @return  self
     */ 
    public function setGanador($ganador)
    {
        $this->ganador = $ganador;

        return $this;
    }

    /**
     * Este metodo sirve para mostrar la informacion de una subasta registrada
     *
     * <b>Pre-condiciones</b>:Debe haber una subasta con información ya
     * guardada.
     * <b>Pos-condiciones</b>:Mostrara la información de una subasta registrado.
     *
     * @return informacion de la subasta
     */
    public function __toString() {

         $info = "Valor inicial de la subasta: " . $valorInicial
                . "\nValor actual de la subasta: " . $valorFinal . "\nEstado actual de la subasta: " . $activa;
        return $info;
    }
}
?>
