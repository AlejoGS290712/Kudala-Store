<?php 

    class FacturaModel
    {
        //Atributos
        private $idFactura;
        private $usuario;
        private $fecha;        
        private $valorTotal;

        //Metodos
        public function __construct($usuario,$fecha,$valorTotal)
        {
            $this->usuario    = $usuario;
            $this->fecha      = $fecha;
            $this->valorTotal = $valorTotal;
        }
        
        //Setters and Getters

        /**
         * Get the value of idFactura
         */ 
        public function getIdFactura()
        {
                return $this->idFactura;
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
    }

?>