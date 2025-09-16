<?php
    $nombre = 'Hugo';
    $edad = 21;
    $altura = 1.74;
    $estudiante = true;

    $metros = (int)$altura;
    $metros = intval($altura);
    echo 'Nombre:'.$nombre.'<br>';
    echo 'edad:'.$edad.'<br>';

    var_dump($nombre);
    echo '<br>';
    var_dump($edad);
    echo '<br>';
    var_dump($metros);
    echo '<br>';
    var_dump($estudiante);
    echo '<br>';

    $num1 = 8;
    $num2 = 4;
    $resultado = $num1 + $num2;
    echo 'suma: '.$resultado;
    echo '<br>';
    $resultado = $num1 - $num2;
    echo 'resta: '.$resultado;
    echo '<br>';
    $resultado = $num1 * $num2;
    echo 'multiplicacion: '.$resultado;
    echo '<br>';
    $resultado = $num1 /$num2;
    echo 'division: '.$resultado;
    echo '<br>';
    $resultado = $num1 % $num2;
    echo 'el resto es: '.$resultado;
    echo '<br>';
    $resultado =( $num1 > $num2)? $num1 : $num2;
    echo 'El mayor es el : '.$resultado;
    var_dump($resultado)
?>

<html>
    <head></head>
    <body>
        <h1>Bienvenido <?php echo $nombre; ?></h1>
    </body>
</html>