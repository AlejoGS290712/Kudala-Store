<?php 

    class Pais{
        //Atributos
        private $idPais;
        private $descripcionPais;
        private $departamento;

        //Metodos
        public function __construct()
        {
            
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
         * Set the value of idPais
         *
         * @return  self
         */ 
        public function setIdPais($idPais)
        {
                $this->idPais = $idPais;

                return $this;
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