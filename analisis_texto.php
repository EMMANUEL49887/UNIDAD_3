<?php
// Alumno: Jesús Emmanuel Arreola López
//Carrera : Ingenieria informatica 
// No. Control : #242310336

$texto = "El Señor es mi pastor; 
nada me falta.
2 En verdes praderas me hace descansar,
a las aguas tranquilas me conduce,
3 me da nuevas fuerzas
y me lleva por caminos rectos,
haciendo honor a su nombre.

4 Aunque pase por el más oscuro de los valles,
no temeré peligro alguno,
porque tú, Señor, estás conmigo;
tu vara y tu bastón me inspiran confianza.

5 Me has preparado un banquete
ante los ojos de mis enemigos;
has vertido perfume en mi cabeza,
y has llenado mi copa a rebosar.
6 Tu bondad y tu amor me acompañan
a lo largo de mis días,
y en tu casa, oh Señor, por siempre viviré.";

$punto = 0;
$coma = 0;
$vocales_Mayusculas = 0;
$vocales_Minusculas = 0;
$consonantes_Mayusculas = 0;
$consonantes_Minusculas = 0;
$espacios_ = 0;
$otros_signos = 0;
$puntoycoma = 0;
$admiracion = 0;
$interrogacion = 0;

// Conjuntos 
$vocales_MayusculasStr = "AEIOU";
$vocales_MinusculasStr = "aeiou";
$consonantes_MayusculasStr = "BCDFGHJKLMNÑPQRSTVWXYZ";
$consonantes_MinusculasStr = "bcdfghjklmnñpqrstvwxyz";
$otros_signosStr = "!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";

// P4: Trayecto de nuestro texto y clasificación de los caracteres.
for ($i = 0; $i < strlen($texto); $i++) {
    $char = $texto[$i];

    if (ctype_alpha($char)) { // Decifra si es una letra
        if (strpos($vocales_MayusculasStr, $char) !== false) {
            $vocales_Mayusculas++;
        } elseif (strpos($vocales_MinusculasStr, $char) !== false) {
            $vocales_Minusculas++;
        } elseif (strpos($consonantes_MayusculasStr, $char) !== false) {
            $consonantes_Mayusculas++;
        } elseif (strpos($consonantes_MinusculasStr, $char) !== false) {
            $consonantes_Minusculas++;
        }
    } elseif ($char == '!') {
        $admiracion++;
    } elseif ($char == '?') {
        $interrogacion++;
    } elseif ($char == '.') {
        $punto++;
    } elseif ($char == ',') {
        $coma++;
    } elseif ($char == ';') {
        $puntoycoma++;
    } elseif (strpos($otros_signosStr, $char) !== false) {
        $otros_signos++;
    } elseif ($char == " ") {
        $espacios_++;
    }
}

// P5: Mostramos resultados.
echo "<h2>Análisis del Texto</h2>";
echo "<p>Texto Analizado: <strong>$texto</strong></p>";
echo "<p>Vocales Mayúsculas: <strong>$vocales_Mayusculas</strong></p>";
echo "<p>Vocales Minúsculas: <strong>$vocales_Minusculas</strong></p>";
echo "<p>Consonantes Mayúsculas: <strong>$consonantes_Mayusculas</strong></p>";
echo "<p>Consonantes Minúsculas: <strong>$consonantes_Minusculas</strong></p>";
echo "<p>Signos de Admiración: <strong>$admiracion</strong></p>";
echo "<p>Signos de Interrogación: <strong>$interrogacion</strong></p>";
echo "<p>Puntos: <strong>$punto</strong></p>";
echo "<p>Comas: <strong>$coma</strong></p>";
echo "<p>Puntos y Comas: <strong>$puntoycoma</strong></p>";
echo "<p>Otros Signos: <strong>$otros_signos</strong></p>";
echo "<p>Espacios: <strong>$espacios_</strong></p>";
?>