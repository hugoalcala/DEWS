<?php

//Ejercicio 1
$n1 = 34;

if($n1 %2 === 0){
    echo "Es un numero par";
}else{
    echo "Es un numero impar";
}

//Ejercicio2

$edad = 19;

if($edad >= 18){
    echo 'Es mayor de edad';
}elseif($edad < 0){
    echo 'edad incorrecta';
}else{
    echo 'menos de edad';
};

//Ejercicio3
$nota = (isset($_GET['nota']) && preg_match('/^\d+(\.\d+)?$/', $_GET['nota'])) ? floatval($_GET['nota']) : -1;

if($nota >= 0 && $nota < 5){
    echo 'suspenso';
}elseif($nota >= 5 && $nota < 7){
    echo 'bien';
}elseif($nota >= 7 && $nota< 9 ){
    echo 'notable';
}elseif( $nota >= 9 && $nota <= 10){
    echo 'sobresaliente';
}else{
    echo 'nota incorrecta';
}

//ejercicio 5
$entero1 = 17;
$entero2 =2;
$entero3 = 9;

if($entero1 > $entero2 && $entero1 > $entero3){
    echo 'el numero mayor es: ' . $entero1;
}elseif ($entero2 > $entero1 && $entero2 > $entero3 ){
    echo 'el numero mayor es: ' . $entero2;
}elseif($entero3 > $entero1 && $entero3 > $entero2){
    echo 'el numero mayor es: ' . $entero3;
}else{
    echo 'empate';
}
//ejercicio6
$numero1 = 4 ;
$numero2 = 4;
$op = '*';

switch($op){
    case '+':
        echo $numero1 . '+'. $numero2.'='.($numero1 + $numero2);
        break;
    case '-':
        echo $numero1 . '-'. $numero2.'='.($numero1 - $numero2);
        break;
    case '*':
        echo $numero1 . '*'. $numero2.'='.($numero1 * $numero2);
        break;
    case '/':
        if($numero2 != 0){
        echo $numero1 . '/'. $numero2.'='.($numero1 / $numero2);
        }else{
            'division entre 0';
        };
        break;
    default:
        echo'operador no valido';
          
}
?>