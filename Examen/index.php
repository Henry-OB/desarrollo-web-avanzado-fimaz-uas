<?php
require_once 'clases/Admin.php';
require_once 'clases/Alumno.php';

$listaUsuarios = [];
$mensajeControlado = "";

try {

    $adminValido = new Admin("Henry osuna", "Henry2345@gmail.com");
    $listaUsuarios[] = $adminValido;

    $alumnoValido = new Alumno("Juan Perez", "juan.perez@gmail.com", "12345678");
    $listaUsuarios[] = $alumnoValido;

    $alumnoInvalido = new Alumno("Armando Lopez", "ArmandoLPgmail.com", "87654321");
    $listaUsuarios[] = $alumnoInvalido;

} catch (Exception $e) {

    $mensajeControlado = "Error detectado: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Examen POO</title>
</head>
<body>

 <h2>Lista de Usuarios</h2>

<table border="1">
   <tr>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Rol</th>
      <th>Matricula</th>

        </tr>
     <?php foreach ($listaUsuarios as $usuario): ?>
          <tr>
          <td><?php echo $usuario->getNombre(); ?></td>
          <td><?php echo $usuario->getCorreo(); ?></td>
          <td><?php echo $usuario->getRol(); ?></td>
             <td>
                <?php 
                if ($usuario instanceof Alumno) {
                  echo $usuario->getMatricula();
                  } else {
                 echo "";
                    }
               ?>
                </td>
             </tr>
        <?php endforeach; ?>
    </table>

    <br>

    <?php if (!empty($mensajeControlado)): ?>
        <p><b>ATENCION: <?php echo $mensajeControlado; ?></b></p>
    <?php endif; ?>

</body>
</html>
