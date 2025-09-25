<?php

$frutas = ['manzana','pera','mandarina'];
echo $frutas[0];


foreach ($frutas as $k => $frutas) {
    echo $k.':'.$frutas.'<br/>';
}
for ($i=0; $i <count($frutas) ; $i++) { 
    echo $frutas[$i].'<br/>';
}

$empleados = [
    '12345678A'=>['nombre' =>'Juan', 'nif' => '12345678A', 'salario' => 3200],
    '12445678Z'=>['nombre' =>'Mario', 'nif' => '12445678Z', 'salario' => 2000],
    '12345631w'=>['nombre' =>'Juan', 'nif' => '12345631w', 'salario' => 5000]
];
$contador =[];
foreach ($empleados as $nif => $empleado) {
    //OPCION 1
    $nombre = $empleado['nombre'];
    $contador[$nombre] = array_key_exists($empleado['nombre'], $contador) ? $contador[$nombre] +1 : 1;
    //OPCION 2
    if(!array_key_exists($nombre, $contador))
        $contador[$nombre] = 0;
    $contador[$nombre]++;
}
print_r($contador);

$people = [
    'Madrid' =>['nombre' => 'Ana', 'ciudad'=>'Madrid', 'edad' =>23],
    'León' =>['nombre' => 'Luis', 'ciudad'=>'Leon', 'edad' =>24],
    'Madrid' =>['nombre' => 'Marta', 'ciudad'=>'Madrid', 'edad' =>21],
    'Madrid' =>['nombre' => 'Maria', 'ciudad'=>'Madrid', 'edad' =>26],
    'Segovia' =>['nombre' => 'Pedro', 'ciudad'=>'Segovia', 'edad' =>22],
];
$ciudades = [];
foreach ($people as $person) {
    $ciudades[$person['ciudad']][] = $person;
}

$empleados = [
    ['nombre' =>'Juan', 'nif' => '12345678A', 'salario' => 3200],
    ['nombre' =>'Mario', 'nif' => '12445678Z', 'salario' => 2000],
    ['nombre' =>'Juan', 'nif' => '12345631w', 'salario' => 5000]
];
usort($empleados, function($a,$b){
    return $a['salario'] - $b['salario'];
});

$prod = [
    1 =>['camiseta', 20],
    2 =>['pantalon', 50],
    3 => ['sudadera', 70]
];

$result = array_map(function($producto){
    return $producto[1]*1.1;
},$prod);

print_r($result);


$prodcutos = ['camiseta', 'jeans', 'gorro'];
$precio = [21,33,10];

$resultado = array_map(function($pro, $pre){
    return [$pro, $pre];
}, $prodcutos, $precio);
print_r($resultado)

?>