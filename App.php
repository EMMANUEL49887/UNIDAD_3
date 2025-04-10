<?php
// Incluir la clase
require_once 'actividad_metodos.php';
// Llamar al método de clase (estático)
echo Calculadora::mostrarMensaje() . "<br>";

// Crear una instancia de la clase
$miCalculadora = new Calculadora();
// Usar los métodos de instancia
echo "Suma de 5 + 3: " . $miCalculadora->sumar(5, 3) . "<br>";
echo "Multiplicación de 4 * 2: " . $miCalculadora->multiplicar(4, 2) . "<br>";
echo "La división de 4 / 2 : " . $miCalculadora->dividir(4, 2) . "<br>";
echo "La resta de 25 menos  17 es  : " . $miCalculadora->restar (25, 17) . "<br>";
echo " los 90 grados celsius son   : " . $miCalculadora->convertircelsiusafarenheit (90) . "<br>";
?>
