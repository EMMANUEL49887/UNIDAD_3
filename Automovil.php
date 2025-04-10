<?php
class Automovil {
    public $color;
    public $marca;
    public $numeroPuertas;
    private $esCamioneta;

    // Constructor para inicializar atributos
    public function __construct($color, $marca, $numeroPuertas, $esCamioneta) {
        $this->color = $color;
        $this->marca = $marca;
        $this->numeroPuertas = $numeroPuertas;
        $this->esCamioneta = $esCamioneta;
    }

    // Método para verificar si es camioneta
    public function esCamioneta(): string {
        return $this->esCamioneta ? "Sí, es una camioneta" : "No, no es una camioneta";
    }

    // Método para mostrar información del automóvil
    public function mostrarDatos(): string {
        return "Marca: $this->marca<br>
                Color: $this->color<br>
                Número de Puertas: $this->numeroPuertas<br>
                ¿Es camioneta?: " . $this->esCamioneta();
    }

    // Método para modificar el color del automóvil
    public function modificarColor($nuevoColor): void {
        $this->color = $nuevoColor;
    }
}
?>