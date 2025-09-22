<?php

$frutas = ['manzana','pera','mandarina'];
echo $frutas[0];


foreach ($frutas as $k => $frutas) {
    echo $k.':'.$frutas.'<br/>';
}
for ($i=0; $i <count($frutas) ; $i++) { 
    echo $frutas[$i].'<br/>';
}
?>