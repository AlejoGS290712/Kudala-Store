<?php 
	class VentaModel
 {
    private $idVenta;
    private $idComprador;
    private $fecha;  
    private $valorTotal;
   
     /* Este metodo crea una subasta con los datos requeridos
     *
     * <b>Pre-condiciones</b>:Deben haber datos
     * requeridos.<b>Pos-condiciones</b>:Se agrega una nueva subasta al sistema.
     *
     * @param idVenta es el numero de identificacion de la venta
     * @param idcomprador es el identidicador del usuario que compro la el producto ofrecido
     * @param fecha es el dia que se realizo la venta
     * @param valorTotal es el valor con el que se realizó la venta
     */
    
    public function __construct( $idVenta, $idComprador, $fecha, $valorTotal )
    {
        $this->idVenta = $idVenta;
        $this->idComprador = $idComprador;
        $this->fecha = $fecha;
        $this->valorTotal = $valorTotal;
    }

     /**
     * Este método permite crear una venta en el sistema.
     * <b> pre-condición </b> : Ya se debe haber verificado que el ingreso al sistema
     * <b> post-condición </b> : Se crea una venta con éxito y se almacena.
     */
    public function IngresarDatos($idVenta, $fecha, $valorTotal) {

        this->idVenta = $idVenta;
        this->fecha = $fecha;
        this->valorTotal = $valorTotal;
        this->idComprador = 0;
    }

 //Setters y Getters

    /**
     * Get the value of idVenta
     */ 
    public function getIdVenta()
    {
        return $this->idVenta;
    }

    /**
     * Set the value of idVenta
     *
     * @return  self
     */ 
    public function setIdVenta($idVenta)
    {
        $this->idVenta = $idVenta;

        return $this;
    }

    /**
     * Get the value of idComprador
     */ 
    public function getIdComprador()
    {
        return $this->idComprador;
    }

    /**
     * Set the value of idComprador
     *
     * @return  self
     */ 
    public function setIdComprador($idComprador)
    {
        $this->idComprador = $idComprador;

        return $this;
    }


    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of valorTotal
     */ 
    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    /**
     * Set the value of valorTotal
     *
     * @return  self
     */ 
    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;

        return $this;
    }

    /**
     * Este metodo sirve para mostrar la informacion de una venta registrada
     *
     * <b>Pre-condiciones</b>:Debe haber una venta con información ya
     * guardada.
     * <b>Pos-condiciones</b>:Mostrara la información de una venta registrada.
     *
     * @return informacion de la venta
     */
    public function __toString() {

         $info = "Valor de la venta: " . $valorTotal
                . "\nFecha de la venta: " . $fecha;
        return $info;
    }
}
?>
