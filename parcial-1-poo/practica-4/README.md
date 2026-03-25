# Práctica 4: Integración POO + Herencia + Validaciones + Excepciones

 # Objetivo
 El objetivo de esta práctica es construir un mini-sistema de Programación Orientada a Objetos (POO) en PHP que simula un examen parcial. Se busca integrar los siguientes conceptos:
 # Encapsulamiento.
 Herencia (Clase base Usuario y clases hijas Admin, Alumno e Invitado).
 Polimorfismo básico mediante el método getRol() en todas las clases hijas.
 Validación de datos (verificación de formato de correo electrónico).
 Manejo de excepciones utilizando bloques try/catch para evitar errores fatales.
 Salida en HTML organizada en tablas. 

 # Requisitos del Entorno
 Para ejecutar este proyecto correctamente, se requiere:
 PHP 8.0 o superior.
 Servidor local (XAMPP).
 Navegador web.
 Git para el control de versiones.

# Instrucciones de Ejecución 
Clonar el repositorio en la carpeta htdocs de tu servidor local (XAMPP).Asegurarse de que el servidor Apache esté activo.Abrir el navegador y dirigirse a la siguiente ruta:
http://localhost/desarrollo-web-avanzado-fimaz-uas/parcial-1-poo/practica-4/index.php

# Evidencia Esperada
Al ejecutar el archivo index.php, se deberá visualizar:
Tabla HTML: Una lista con los usuarios válidos creados (Admin, Alumno e Invitado) mostrando Nombre, Correo, Rol, Matrícula y Empresa.
Manejo de Errores: Un mensaje controlado de "Error controlado: ..." al intentar registrar un usuario con un correo electrónico mal escrito.
