<?php 
// Incluir la clase Alumno 
require_once 'alumno.php'; 
  
// Crear un objeto de la clase Alumno 
$alumno1 = new Alumno(); 
$alumno1->asignarDatos("Carlos", "Gómez Pérez", "A12345678");
$alumno1->mostrarDatos();


// Generar y mostrar el correo electrónico de este alumno
$correo1 = $alumno1->generarCorreo();
echo "Correo electrónico: " . $correo1 . "<br>";


// Crear un objeto de la clase Alumno  (es el reto 2 )

echo "<br>"; // Agregamos un salto de línea para separar los alumnos y que no se vean empalmados los alumnos aqui pondre mis nombres, aepllidos y numero de control, para hacerlo mas real

$alumno2 = new Alumno();
$alumno2->asignarDatos("Jesus ", "Arreola López ", "242310336");
$alumno2->mostrarDatos();

// Generar y mostrar el correo electrónico de este alumno
$correo2 = $alumno2->generarCorreo();
echo "Correo electrónico: " . $correo2 . "<br>";

?> 


  
