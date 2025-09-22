<?php
//Ejericicio1
$numeros =[1,2,3,4,5,6,7,8,9,10];
print_r($numeros);
$nuemros2 = range(1,10);
print_r($nuemros2);
//Ejercicio4
$nombres =[];

$nombres[] = 'Luis';
$nombres[] = 'juan';
$nombres[] = 'hugp';
print_r($nombres);


//Ejercicio5
unset($nombres[0]);
print_r($nombres);


//Ejercicio10
$num = range(1,100,4);

$suma = array_sum($num);
echo $suma;
 
//Ejerciio11
$persona = [
            "nombre"=>'hugo', 
            'edad'=>21,
            'ciudad'=>'madrid'
        ];
foreach($persona as $k=>$dato){
    echo $k.':'.$dato.'<br/>';
}
$persona['nombre'] ='Juanjo';

$persona['estatura'] = 1.80;
unset($persona['estatura']);

if(array_key_exists('nombre', $persona)){
    echo $persona;
}else {
    echo 'no existe la clave';
}
$keys =array_keys($persona);
for ($i=0; $i <count($keys) ; $i++) { 
    echo $persona[$keys[$i]];
};


$valores = array_keys($persona);
for ($i=0; $i <count($valores) ; $i++) { 
    echo $persona[$valores[$i]];
}
$numeros = [5,3,1,6,3,21,7];
sort($numeros);
print_r($numeros);


$ciudades = ['madrid', 'león', 'barcelona'];
sort($ciudades);
print_r($ciudades);

$ciudades_Reversas = array_reverse($ciudades);
print_r($ciudades_Reversas);


if(in_array('madrid', $ciudades)){
    echo 'dato encontrado';
}else{
    echo 'dato no encontrado';
};

$resultado = array_merge($ciudades, $numeros);
print_r($resultado);


$result = array_slice($numeros, 0, 3);


$nif = ['1243231A', '2123432K', '03294023L'];
$cliente = ['Ana', 'Juan', 'Lolo'];

$oco = array_combine($nif ,$cliente);
print_r($oco);


$numeros11 = [2,3,4,7,6];
$numeros12 =[1,9,0,5,8];

$fini = [];

for ($i=0; $i <count($numeros11); $i++) { 
    $fini[]=$numeros11[$i] + $numeros12[$i];
}

print_r($fini);

echo array_sum($numeros11);


$numeros111 = range(0, 100);

$cc = array_chunk($numeros111, 5)
?>