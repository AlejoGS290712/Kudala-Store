<?php
 class UsuarioModel
 {
    private $idUsuario;
    private $tipoDoc;
    private $documento;
    private $tipoUser; 
    private $nombreUser; 
    private $apellidoUser; 
    private $correoUser; 
    private $telefono; 
    private $contrasennia; 
    private $valorCred;

    
    public function __construct( $nombreUser, $apellidoUser, $correoUser, $contrasennia )
    {
        $this->nombreUser   = $nombreUser;
        $this->apellidoUser = $apellidoUser;
        $this->correoUser   = $correoUser;
        $this->contrasennia = $contrasennia;
    }


    //Setters y Getters

    /**
     * Get the value of idUsuario
     */ 
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set the value of idUsuario
     *
     * @return  self
     */ 
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get the value of tipoDoc
     */ 
    public function getTipoDoc()
    {
        return $this->tipoDoc;
    }

    /**
     * Set the value of tipoDoc
     *
     * @return  self
     */ 
    public function setTipoDoc($tipoDoc)
    {
        $this->tipoDoc = $tipoDoc;

        return $this;
    }

    /**
     * Get the value of documento
     */ 
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set the value of documento
     *
     * @return  self
     */ 
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get the value of tipoUser
     */ 
    public function getTipoUser()
    {
        return $this->tipoUser;
    }

    /**
     * Set the value of tipoUser
     *
     * @return  self
     */ 
    public function setTipoUser($tipoUser)
    {
        $this->tipoUser = $tipoUser;

        return $this;
    }

    /**
     * Get the value of nombreUser
     */ 
    public function getNombreUser()
    {
        return $this->nombreUser;
    }

    /**
     * Set the value of nombreUser
     *
     * @return  self
     */ 
    public function setNombreUser($nombreUser)
    {
        $this->nombreUser = $nombreUser;

        return $this;
    }

    /**
     * Get the value of apellidoUser
     */ 
    public function getApellidoUser()
    {
        return $this->apellidoUser;
    }

    /**
     * Set the value of apellidoUser
     *
     * @return  self
     */ 
    public function setApellidoUser($apellidoUser)
    {
        $this->apellidoUser = $apellidoUser;

        return $this;
    }

    /**
     * Get the value of correoUser
     */ 
    public function getCorreoUser()
    {
        return $this->correoUser;
    }

    /**
     * Set the value of correoUser
     *
     * @return  self
     */ 
    public function setCorreoUser($correoUser)
    {
        $this->correoUser = $correoUser;

        return $this;
    }

    /**
     * Get the value of contrasennia
     */ 
    public function getContrasennia()
    {
        return $this->contrasennia;
    }

    /**
     * Set the value of contrasennia
     *
     * @return  self
     */ 
    public function setContrasennia($contrasennia)
    {
        $this->contrasennia = $contrasennia;

        return $this;
    }

    /**
     * Get the value of telefono
     */ 
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @return  self
     */ 
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of valorCred
     */ 
    public function getValorCred()
    {
        return $this->valorCred;
    }

    /**
     * Set the value of valorCred
     *
     * @return  self
     */ 
    public function setValorCred($valorCred)
    {
        $this->valorCred = $valorCred;

        return $this;
    }
 }
 
?>