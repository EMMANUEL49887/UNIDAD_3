<?php
class Calculadora {
 // Método de instancia para sumar
 public function sumar($a, $b) {
 return $a + $b;
 }
 // Método de instancia para multiplicar
 public function multiplicar($a, $b) {
 return $a * $b;
 }
// metodo  que nos permiten restar a-b 
 public  static function restar ($a, $b): float|int {
    return $a - $b;
 }



 // metodo  que nos permiten convertir cualquier grados celsius a farenheit 
 public  static function convertircelsiusafarenheit ($a,): float|int {
    return $a * 9/5 + 32;
 }

 // metodo  que nos permiten dividir

 public function dividir($a, $b):  float|int {
    return $a / $b;
 }
 // Método de clase (estático) para mostrar un mensaje
 public static function mostrarMensaje() {
 return "Bienvenido a la Calculadora en PHP 🚀";
 }
}



?>