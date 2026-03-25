<?php

require_once 'clases/Admin.php';
require_once 'clases/Alumno.php';
require_once 'clases/Invitado.php';

$usuarios = [];
$mensajeError = "";

try {

    $usuarios[] = new Admin("Henry", "henry24@gmail.com");
    $usuarios[] = new Alumno("Samuel", "samuel564@gmail.com", "20261122");
    $usuarios[] = new Invitado("Luis", "luis091@fimaz.uas.edu.mx", "Sinaloa Tech");
    $usuarios[] = new Alumno("MArio", "MarioOP34gmail.com", "0000");

} catch (Exception $e) {

    $mensajeError = $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 4 - Integración POO</title>
    <style>
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        .error { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Sistema de Usuarios FIMAZ</h1>
    
    <?php if ($mensajeError): ?>
        <p class="error">Error controlado: <?php echo $mensajeError; ?></p>
    <?php endif; ?>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Matrícula</th>
            <th>Empresa</th>
        </tr>
        <?php foreach ($usuarios as $u): ?>
        <tr>
            <td><?php echo $u->getNombre(); ?></td>
            <td><?php echo $u->getCorreo(); ?></td>
            <td><?php echo $u->getRol(); ?></td>
            <td><?php echo (method_exists($u, 'getMatricula')) ? $u->getMatricula() : ""; ?></td>
            <td><?php echo (method_exists($u, 'getEmpresa')) ? $u->getEmpresa() : ""; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
