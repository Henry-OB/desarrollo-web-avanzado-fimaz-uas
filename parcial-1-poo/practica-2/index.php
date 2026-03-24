<?php

require_once 'Admin.php';

$admin = new Admin("Henry Osuna", "Henry24@gmail.com");

echo "<h1>Prueba de Herencia</h1>";

echo "Nombre: " . $admin->getNombre() . "<br>"; 
echo "Correo: " . $admin->getCorreo() . "<br>";
echo "Rol: " . $admin->getRol() . "<br>";
?>
