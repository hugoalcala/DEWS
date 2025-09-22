<?php

for($i =1; $i<11; $i++){
    echo $i;
}

$n =$_GET['n'];
$num = 0;

$cont =1;
while($cont<=$n){
    $sum +=$cont;
    $cont++;
}
echo $sum;

$num = 5;


for ($i=1; $i <= 10; $i++) { 
    echo $n.'x'.$i,'='.($n*$i);
    echo '<br/>';
}
$nu = 5;
$contador = 2;
while ($contador <= $nu) {
    echo $contador;
    $contador +=2;
}

$nu = 5;
$factorial =1;

for ($i=0; $i < $nu ; $i++) { 
    $factorial*=$i;
}
echo $n. '!='.$factorial



?>