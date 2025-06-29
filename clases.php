<?php 
    class persona{
        // propiedades
        public $nombre;
        private $edad;
        protected $altura;

        // metodos
        public function asignarNombre($nuevoNombre){
            $this->nombre = $nuevoNombre;
        }
        
        public function imprimirNombre(){
            echo "Hola, soy ".$this->nombre;
        }

        public function imprimirEdad(){
            $this->edad = 20;
            echo " y tengo ".$this->edad." años";
            return $this->edad;
        }
        public function imprimirAltura(){
            $this->altura = 1.80;
            echo " y mido ".$this->altura." metros";
        }
    }

    class trabajador extends persona{
        public $cargo;

        public function asignarCargo($nuevoCargo){
            $this->cargo = $nuevoCargo;
        }

        public function presentarseComoTrabajador(){
            echo "Hola, soy ".$this->nombre.", mi cargo es ".$this->cargo;
        }

    }

    // objetos
    $objAlumno = new persona();
    $objAlumno->asignarNombre("Oscar");
    $objAlumno->imprimirNombre();
    $objAlumno->imprimirEdad();
    echo "<br>";
    
    $objAlumno2 = new persona();
    $objAlumno2->asignarNombre("Pedro");
    $objAlumno2->imprimirNombre();
    echo "<br>";

    echo $objAlumno->nombre;
    echo "<br>";
    echo $objAlumno2->nombre;
    echo "<br>";
    
    $objTrabajador = new trabajador();
    $objTrabajador->asignarNombre("Juan");
    $objTrabajador->asignarCargo("Ingeniero");
    $objTrabajador->presentarseComoTrabajador();
    $objTrabajador->imprimirAltura();
?>