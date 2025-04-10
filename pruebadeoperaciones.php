<?php
// Incluir la clase Operaciones
require_once 'operaciónes.php';




// Crear un objeto de la clase Operaciones
$operacion = new Operaciones();

// Llamar al método sin parámetros
echo "Suma sin parámetros (usando propiedades de la clase): " . $operacion->sumarSinParametros() .
"<br>";

// Llamar al método con parámetros
echo "Suma con parámetros (5 + 7): " . $operacion->sumarConParametros(5, 7) . "<br>";


// llamar al metodo de multiplicación 
echo "multiplicación sin parametros (usando propiedades de la clase ):" . $operacion->multiplicarSinParametros() .
"<br>";

// Llamar al método de multiplicación  con parámetros
echo "multiplicación con parámetros (8 * 9): " . $operacion->multiplicarConParametros(8, 9) . "<br>";


?>