<?php
// Definimos dos números para comparar
$numero1 = 40;
$numero2 = 12;
// Estructura IF
echo "<h2>Ejemplo con IF</h2>";
if ($numero1 < $numero2) {
 echo "El número $numero1 es menor que $numero2";
}
// Estructura IF-ELSE
echo "<h2>Ejemplo con IF-ELSE</h2>";
if ($numero1 > $numero2) {
 echo "El número $numero1 es mayor que $numero2";
} else {
 echo "El número $numero1 NO es mayor que $numero2";
}
// Estructura IF-ELSEIF-ELSE con temperatura
$temperatura = 0;
echo "<h2>Ejemplo con IF-ELSEIF-ELSE</h2>";
if ($temperatura > 30) {
 echo "Hace mucho calor 🥵";
} elseif ($temperatura >= 15 && $temperatura <= 30) {
 echo "El clima es agradable 😊";
} 

if ($temperatura <=0) {
    echo "Es mejor que busques un buen sarape porque el clima estara basante frio 🥶";
} elseif ($temperatura >0) {
    echo "Hace frío 🥶";
}
//JESUS EMMANUEL ARREOLA LÓPEZ 
//#242310336
//INGENIERIA INFORMÁTICA
//PROGRAMACIÓN ORIENTADA A OBJETOS

// Mas condicionales adicionales al clima 
$clima = 3;
echo "<h2>Mas Ejemplos De Climas  </h2>";

if ($clima ==1) {
    echo "Hoy el dia esta agradablemente soleado🌞";
} elseif ($clima ==2) {
    echo "Hoy el dia esta agradablemente nublado☁️";
} elseif ($clima ==3) {
    echo " Hoy los vientos soplan mucho🍃";
}

?>
