<?php

/* This PHP code snippet is creating an instance of a `Usuario` class, which seems to represent a user
object. Here's a breakdown of what the code is doing: */
require_once 'Usuario.php';

$usuario = new Usuario("Juan Pérez", "juan.perez@uas.edu.mx");

echo "<h1>Información del Usuario</h1>";

echo "Nombre: " . $usuario->getNombre() . "<br>";
echo "Correo: " . $usuario->getCorreo() . "<br>";

?>
