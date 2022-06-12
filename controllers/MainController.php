<?php 

class MainController extends Controller{
    function __construct()
    {
        parent::__construct();        
    }

    //Metodos
    function render(){        
        $this->view->render('main/index');
    }
}

?>