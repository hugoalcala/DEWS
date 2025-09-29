<?php

function sumarPares(array $numeros): int
{
    $suma = 0;
    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $suma += $numero;
        }
    }
    return $suma;
}

function mediaPares(array $numeros): float
{
    $suma = 0;
    $contador = 0;
    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $suma += $numero;
            $contador++;
        }
    }

    return $suma / $contador;
}


/**
 * funcion que una 2 arrays, elimine los duplicados y devuelva el array ordenado
 */
 function unirArray ($array1, $array2){
    $resultado = array_unique(array_merge($array1, $array2));
    sort($resultado);
    return $resultado;
 }
?>