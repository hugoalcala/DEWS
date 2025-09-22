<?php
session_start();
$_SESSION['acumulado'] = isset($_SESSION['acumulado']) ? $_SESSION['acumulado'] :0;
$_SESSION['acumulado_resta'] = isset($_SESSION['acumulado_resta']) ? $_SESSION['acumulado_resta'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <?php
       $num = isset($_POST['num']) ? floatval($_POST['num']) : 0;
       $_SESSION['acumulado'] += $num;
    ?>
    <p>Acumulado: <?php echo $_SESSION['acumulado'] ?></p><br>

    <form action="calculadora.php" method="post">
        <input type="number" name="num" required step="0.01"/>
        <input type="submit" name="sumar"/>
    </form>

    <br>

   <?php
       $num_resta = isset($_POST['num_restar']) ? floatval($_POST['num_restar']) : 0;
       $_SESSION['acumulado_resta'] -= $num_resta;
    ?>
    <p>Acumulado resta: <?php echo $_SESSION['acumulado_resta'] ?></p><br>

    <form action="calculadora.php" method="post">
        <input type="number" name="num_restar" required step="0.01"/>
        <input type="submit" name="restar"/>
    </form>
</body>
</html>