<?php
class ConsolaDeVideojuego {
    public $color; 
    private $esUnaXbox; 

    // Constructor para inicializar atributos
    public function __construct($color, $esUnaXbox) { 
        $this->color = $color; 
        $this->esUnaXbox = $esUnaXbox; 
    } 

    // Método para verificar si es una Xbox
    public function esUnaXbox() { 
        return $this->esUnaXbox ? "Sí, es una Xbox" : "No, no es una Xbox";  
    } 

    // Método para mostrar información de la consola
    public function mostrarDatos() { 
        return "Color: $this->color<br>  
                ¿Es una Xbox?: " . $this->esUnaXbox(); 
    } 
}
?>
   ?>
   