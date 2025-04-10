<?php
// Importar la clase desde la librería
require_once 'Ejer6.php';

// Crear una instancia de Caja
$caja = new Caja(10, 5, 8);

echo "Dimensiones de la caja:\n";
echo "Ancho: " . $caja->getAncho() . " cm\n";
echo "Alto: " . $caja->getAlto() . " cm\n";
echo "Largo: " . $caja->getLargo() . " cm\n";

echo "\nCálculos:\n";
echo "Volumen: " . $caja->volumen() . " cm³\n";
echo "Área Total: " . $caja->areaTotal() . " cm²\n";

// Crear una caja más grande
$cajaGrande = $caja->cajaMasGrande();
echo "\nCaja más grande (25% más):\n";
echo "Volumen: " . $cajaGrande->volumen() . " cm³\n";
