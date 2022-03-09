<?php

//cremos array 20 elementos
$numeros = array_fill(0,20, 0);

//

function aleatorio(){return (rand(1,10));}

$array_numeros = array_map(aleatorio, $numeros);
//var_dump($array_numeros);

function par_impar($elementos){return !($elementos%2)? true:false;}

$array_numeros_pares = array_map(par_impar, $array_numeros);
//var_dump($array_numeros_pares);

foreach ( $array_numeros as $indice => $valor) {

    $text = $array_numeros_pares[$indice]==true? "par":"impar";
    echo "El valor $valor es $text <br />";}


?>

