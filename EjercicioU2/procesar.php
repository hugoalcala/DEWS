<?php
session_start();
print_r($_SESSION);
$_SESSION['nombre'] = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : '';

// print_r($_POST);
?>

<br/>    

<?php
$_SESSION['nombre'] = 
(isset($_POST['nombre'])) ? 
$_POST['nombre']: 
$_SESSION['nombre']; 

echo 'Hola'.$_SESSION['nombre'];

?>