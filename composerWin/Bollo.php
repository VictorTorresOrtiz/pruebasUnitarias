<?php 
    include_once "Dulces.php";    
   
    class Bollo extends Dulces{        
    
        private $relleno;        
        /**
         *Contrucctor
         *
         * @param  mixed $nombre
         * @param  mixed $numero
         * @param  mixed $precio
         * @param  mixed $relleno
         * @return void
         */
        public function __construct($nombre,$numero,$precio,$relleno){
            parent::__construct($nombre,$numero,$precio);
            $this->relleno=$relleno;
        }
        
        
        /**
         * muestraResumen
         *
         * @return void
         */
        public function muestraResumen() :void{
            parent:: muestraResumen();
            echo "<br>Relleno: $this->relleno";
        }
    }
?>