<?php 

    class ErroresController extends Controller
    {
        function __construct($msj)
        {
            parent::__construct();
            $this->view->msjError = $msj;
            $this->view->render("errores/index");
        }
    }

?>