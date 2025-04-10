<?php
require 'consola_videojuego.php';

// Crear instancias de consolas
$consola1 = new ConsolaDeVideojuego("Negro", true);
$consola2 = new ConsolaDeVideojuego("Blanco", false);

// Mostrar información
echo "<h2>Información de la Consola 1</h2>";
echo $consola1->mostrarDatos();

echo "<h2>Información de la Consola 2</h2>";
echo $consola2->mostrarDatos();
?>