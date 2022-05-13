<?php
class subasta{

public function __construct(){
    //Este es el constructor
    $idSubasta;
    $idProducto;
    $valorInicial;
    $valorFinal;
    $activa;
    $ganador;
}

function __pedirDatos($SUBASTA,
$PRODUCTO,
$PRECIOINICIO,
$PRECIOFINAL,
$ESTADO,
$WINNER){
    $idSubasta = $SUBASTA;
    $idProducto = $PRODUCTO; 
    $valorInicial = $PRECIOINICIO; 
    $valorFinal = $PRECIOFINAL; 
    $activa = $ESTADO;
    $ganador = $WINNER;
}
}
?>