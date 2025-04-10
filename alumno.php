<?php 
class Alumno { 
    // Propiedades privadas     
    private $nombre;     private $apellidos;     private $numeroControl; 
  

     //  Nuevo método para asignar todos los datos de una vez este metodo nos ayuda a recortar el codigo y hacerlo mas directo
     public function asignarDatos($nombre, $apellidos, $numeroControl) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->numeroControl = $numeroControl;
    }
  
    // Método para mostrar los datos del alumno    
     public function mostrarDatos() { 
        echo "Nombre: " . $this->nombre . "<br>";         echo "Apellidos: " . $this->apellidos . "<br>"; 
        echo "Número de Control: " . $this->numeroControl . "<br>"; 
        "<br>";
    } 
// reto 3  hacer el metodo que usaremos para generar el correo
    public function generarCorreo() {
        // Concatenar nombre y número de control directamente para generar el correo
        $correo = $this->nombre . $this->numeroControl . "@itslerdo.edu.mx";
        return $correo; // Retorna el correo generado
    }
} 



?> 
