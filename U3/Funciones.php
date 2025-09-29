<?php

function sumar($a, $b){
    echo $a + $b;
}
sumar(5, 3);



function contar_vocales($cadena){
    $cadena = strtolower($cadena);
    $vocales  = ['a','e','i','u','o'];
    $count = 0;
    for ($i=0; $i <strlen($cadena) ; $i++) { 
        $c = $cadena[$i];
        $count += in_array($c, $vocales) ? 1 : 0;
    }
    return $count;
}
contar_vocales("hola");

function eliminarValor(){
    array_filter()
}
?>