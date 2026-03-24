<?php

require_once 'Usuario.php';

$usuario = new Usuario("Juan Pérez", "juan.perez@uas.edu.mx");

echo "<h1>Información del Usuario</h1>";

echo "Nombre: " . $usuario->getNombre() . "<br>";
echo "Correo: " . $usuario->getCorreo() . "<br>";

?>
