<?php
// Definición de la clase Perro
class Perro {
    public $sonido;
    public $nombre;

    public function __construct($nombre, $sonido) {
        $this->nombre = $nombre;
        $this->sonido = $sonido;
    }

    public function hablar() {
        return $this->nombre . " dice: " . $this->sonido;
    }
}

// Crear los tres perros
$perro1 = new Perro("Perro 1 (Aullido)", "Auuuuuu!");
$perro2 = new Perro("Perro 2 (Gruñido)", "Grrrrr...");
$perro3 = new Perro("Perro 3 (Ladrido agudo)", "¡Guau! ¡Guau!");

// Conversación entre los perros
echo "La conversación entre los perros comienza...\n\n";
echo $perro1->hablar() . "\n";
echo $perro2->hablar() . "\n";
echo $perro3->hablar() . "\n\n";

echo $perro1->hablar() . "\n";
echo $perro2->hablar() . "\n";
echo $perro3->hablar() . "\n\n";

echo $perro1->hablar() . "\n";
echo $perro3->hablar() . "\n";
echo $perro2->hablar() . "\n";
?>
