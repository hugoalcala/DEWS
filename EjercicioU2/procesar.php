<?php

// print_r($_POST);

echo isset($_POST['nombre'])  ? 'Hola ' . $_POST['nombre'] : 'nombre no definido ';

?>