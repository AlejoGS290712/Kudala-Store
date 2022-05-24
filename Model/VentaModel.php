<?php 
	class VentaModel
 {
    private $idVenta;
    private $idProducto;
    private $precio;
    private $activa; 
    private $comprador; 


     /* Este metodo crea una subasta con los datos requeridos
     *
     * <b>Pre-condiciones</b>:Deben haber datos
     * requeridos.<b>Pos-condiciones</b>:Se agrega una nueva subasta al sistema.
     *
     * @param idVenta es el numero de identificacion de la venta
     * @param idProducto es el numero de identificacion del producto
     * @param precio es el valor con el que se realizó la venta
     * @param activa es el estado en el que está la venta
     * @param comprador es el usuario que compro la el producto ofrecido
     */
    
    public function __construct( $idVenta, $idProducto, $precio, $activa, $comprador )
    {
        $this->idVenta = $idVenta;
        $this->idProducto = $idProducto;
        $this->precio = $precio;
        $this->activa = $activa;
        $this->comprador = $comprador;
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
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */ 
    public function setPrecio($precio)
    {
        $this->precio = $precio;

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
     * Get the value of comprador
     */ 
    public function getComprador()
    {
        return $this->comprador;
    }

    /**
     * Set the value of comprador
     *
     * @return  self
     */ 
    public function setComprador($comprador)
    {
        $this->comprador = $comprador;

        return $this;
    }
}
?>