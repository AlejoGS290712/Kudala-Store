<?php 

class UserSession{
    function __construct()
    {
        session_start();
    }

    //Almacena la id del usuario en variables de sesion tanto php como js
    public function setUsuarioActual($idUsuario){
        $_SESSION['idUser'] = $idUsuario;
        echo "<script> localStorage.setItem('estadoSesion', true); </script>";
    }

    //Devuelve la id del usuario almacenado en la sesion
    public function getUsuarioActual(){  
        //Se valida si la variable de sesion existe                     
        if (!isset($_SESSION['idUser'])) {
            echo "<script>localStorage.removeItem('estadoSesion');</script>";
            $this->msjError = "Sesion cerrada, porfavor ingrese nuevamente";
            return false;
        }

        $this->idUsuario = $_SESSION['idUser'];
        return true;    
    }

    //Esta funcion elimina las sesiones de php y js
    public function cerrarSesion(){
        session_unset();
        session_destroy();        
        echo "<script>localStorage.removeItem('estadoSesion');</script>";
    }


}

?>