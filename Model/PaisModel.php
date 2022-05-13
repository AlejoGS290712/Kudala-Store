<?php 

    class PaisModel{
        //Atributos
        private $idPais;
        private $descripcionPais;

        //Metodos
        public function __construct($descripcionPais)
        {
            $this->descripcionPais = $descripcionPais;
        }

        //Setters and Getters   
        
        /**
         * Get the value of idPais
         */ 
        public function getIdPais()
        {
                return $this->idPais;
        }

        /**
         * Get the value of descripcionPais
         */ 
        public function getDescripcionPais()
        {
                return $this->descripcionPais;
        }

        /**
         * Set the value of descripcionPais
         *
         * @return  self
         */ 
        public function setDescripcionPais($descripcionPais)
        {
                $this->descripcionPais = $descripcionPais;

                return $this;
        }
    }

?>