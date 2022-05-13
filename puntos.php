<?php
$usuarioPuntos=0;
$ventaPrecio = 5500;
function __acumularPuntos($usuarioPuntos, $ventaPrecio){
    if($ventaPrecio>1000){
        $usuarioPuntos +=  floor(($ventaPrecio/1000));
        echo $usuarioPuntos;
    }
}
echo __acumularPuntos($usuarioPuntos,$ventaPrecio);
 
?>