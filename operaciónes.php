<?php 
class Operaciones { 
    // Propiedades privadas 
    private $num1 = 5; // la asignación de valores es solo como ejemplo  
    private $num2 = 9; // no es una buena práctica, para ello se usarán constructores 

  
    // Método sin parámetros: usa las propiedades de la clase     
    public function sumarSinParametros() {         return $this->num1 + $this->num2; 


} 
// Jesús Emmanuel Arreola López
//Ingeniería informática
//#242310336
//programación orientada a objetos 




// metodo para multiplicar 
public function multiplicarSinParametros()         {   return $this->num1 * $this->num2;
} 

//metodo con parametros: usamos valores que llamamos
public function multiplicarConParametros($a, $b) {
    return $a * $b;
}

// Método con parámetros: recibe valores en la llamada     
public function sumarConParametros($a, $b) {         return $a + $b; 
} 



} 
?> 
