# ACTIVIDAD 3. Sistema de Usuario con Validaciones y Exepciones.

# Objetivo En esta practica se aplico lo que aprendimos del sistema de usuario con validaciones y exepciones, este sistema incluye herencias entre clases, validacion de datos y manejos de exepciones para controlar errores.

# Explicacion El sistema esta compuesto por 3 clases principales , el 'Usuario' el la clase que contiene los atributos nombre y correo, el 'Admin'  hereda de usuario y representa el administrador con getRol(), el 'Alumno' el alumno hereda de usuario y agrega el atributo matricula. 

# Evidencia del manejo de errores en el archivo 'index.php' se utilizan bloques de try/catch para capturar  exepciones generadas por correos  invalidos, esto mostrara un mensaje de error sin detener el sistema.

# Evidencia de ejecucion al ejecutar el archivo 'index.php' se mostrara los usuarios invalidos creados correctamente un mensaje de error cuando se intenta crear un usuario con correo invalido.
