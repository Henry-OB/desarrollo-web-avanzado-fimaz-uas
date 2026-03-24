<?php
require_once 'clases/Admin.php';
require_once 'clases/Alumno.php';

echo "<h1>Sistema de Usuarios con Excepciones</h1>";

try {
    
    $alumno = new Alumno("Samuel", "samuel098@gmail.com", "2026001");
    echo "Nombre: " . $alumno->getNombre() . "<br>";
    echo "Correo: " . $alumno->getCorreo() . "<br>";
    echo "Rol: " . $alumno->getRol() . "<br>";
    echo "Matricula: " . $alumno->getMatricula() . "<br>";

    echo "<br>";

    $adminInvalido = new Admin("Carlos", "carlos23gmail.com"); 
    
    echo "Admin: " . $adminInvalido->getNombre();

} catch (Exception $e) {

    echo "ERROR: " . $e->getMessage();
}
?>
