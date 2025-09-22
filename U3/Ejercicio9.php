<?php
//ejercicio 9
// 9. Calcula coste de envío según $pesoKg y $destino ("nacional" o "internacional"):
//● Nacional: ≤1kg → 5€, ≤5kg → 10€, >5kg → 20€
//● Internacional: ≤1kg → 15€, ≤5kg → 30€, >5kg → 60€
//● Si $destino distinto a los admitidos, error

$pesoKg = 9 ;
$destino = 'nacional';

if ($destino ==='nacional'){
    if($pesoKg <= 1){
        echo 'el envio cuesta 5 euros';
    }elseif($pesoKg>1 && $pesoKg <=5){
        echo 'el envio cuesta 10 eruos';
    }elseif($pesoKg<5){
        echo 'el envio cuesta 20 euros';
    };
}elseif($destino ==='internacional'){
    if($pesoKg <= 1){
        echo 'el envio cuesta 15 euros';
    }elseif($pesoKg>1 && $pesoKg <=5){
        echo 'el envio cuesta 30 eruos';
    }elseif($pesoKg<5){
        echo 'el envio cuesta 60 euros';
    };
}
?>