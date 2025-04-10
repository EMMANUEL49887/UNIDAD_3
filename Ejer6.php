<?php

    
    // Definición de la clase Caja
    class Caja {
        private float $ancho;
        private float $alto;
        private float $largo;
    
        public function __construct(float $ancho, float $alto, float $largo) {
            $this->ancho = $ancho;
            $this->alto = $alto;
            $this->largo = $largo;
        }
    
        public function volumen(): float {
            return $this->ancho * $this->alto * $this->largo;
        }
    
        public function areaTotal(): float {
            return 2 * ($this->areaFrontal() + $this->areaSuperior() + $this->areaLateral());
        }
    
        private function areaFrontal(): float {
            return $this->ancho * $this->alto;
        }
    
        private function areaSuperior(): float {
            return $this->ancho * $this->largo;
        }
    
        private function areaLateral(): float {
            return $this->alto * $this->largo;
        }
    
        public function getAncho(): float { return $this->ancho; }
        public function setAncho(float $ancho): void { $this->ancho = $ancho; }
    
        public function getAlto(): float { return $this->alto; }
        public function setAlto(float $alto): void { $this->alto = $alto; }

        public function getLargo(): float { return $this->largo; }
    public function setLargo(float $largo): void { $this->largo = $largo; }

    public static function copiarCaja(Caja $otraCaja): Caja {
        return new Caja($otraCaja->getAncho(), $otraCaja->getAlto(), $otraCaja->getLargo());
    }

    public function cajaMasGrande(): Caja {
        return new Caja(
            $this->ancho * 1.25,
            $this->alto * 1.25,
            $this->largo * 1.25
        );
    }

    public function cajaMasPequena(): Caja {
        return new Caja(
            $this->ancho * 0.75,
            $this->alto * 0.75,
            $this->largo * 0.75
        );
    }
}
