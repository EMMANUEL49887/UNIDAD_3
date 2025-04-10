<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Práctica de Variables y Constantes en PHP</title>
</head>
<body>
 <h1>Uso de Variables y Constantes en PHP</h1>
 <?php
 // Definición de variables
 $nombre = "Jesús Emmanuel";
 $apellidos = "Arreola López";
 $edad = 19;
 $Clave_De_Descuento="ZENKU";
 $ciudad = "Lerdo Durango";
 $precioProducto = 175.99;
 // Definición de una constante
 Const EMPRESA = "Tech Solutions S.A.";
 // Mostrando información en la página
 echo "<p>Nombre del usuario: <strong>$nombre</strong></p>";
 echo "<p>Edad: <strong>$edad años</strong></p>";
 Echo "<p>Apellidos: <strong>$apellidos </strong><p>";
 echo "<p>Ubicación: <strong>$ciudad</strong></p>";
 echo "<p>Precio del producto: <strong>$$precioProducto</strong></p>";
 echo "<p>Clave de descuento: <strong>$Clave_De_Descuento</strong></p>";
 echo "<p>Empresa: <strong>" . EMPRESA . "</strong></p>";

 ?>
 <hr>
 <h2>Operaciones con Variables</h2>
 <?php
 // Operaciones matemáticas con variables
 $precioConDescuento = $precioProducto * 0.9; // Aplicando 10% de descuento
 $IVA = $precioProducto *0.16 + $precioProducto ;// Aplicamos el IVA de impuestos , (en mexico es el 16%)
 echo "<p>Precio con 10% de descuento: <strong>$$precioConDescuento</strong></p>";
 echo "<p>Precio con IVA: <strong>$$IVA</strong></p>";
 // Concatenación de cadenas
 $mensaje = "Bienvenido " . $nombre . " a " . EMPRESA . ".";
 echo "<p>$mensaje</p>";
 ?>
</body>
</html>