<?php 
    class Persona {
        private $nombre;
        protected $edad;
        private $nombreAux;

        public function __construct($nombre, $edad) {
            $this->nombre = $nombre;
            $this->edad = $edad;
            self::$nombreAux = $nombre;
        }
        public function getNombre() {
            return $this->nombre;
        }
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }
        public function getEdad() {
            return $this->edad;
        }
        public function setEdad($edad) {
            $this->edad;
        }
        public static function saludar(){
            echo"hello , my name is " .self::$nombreAux;
        }
    }
?>  