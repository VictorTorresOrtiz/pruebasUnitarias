<?php
    include_once "Dulces.php";   
    
    /**
     * Clase Chocolate extiende de Dulces
     */
    class Chocolate extends Dulces{        

        private $porcentajeCacao;        
        private $peso;        
        /**
         * Contructor
         *
         * @param  mixed $nombre
         * @param  mixed $numero
         * @param  mixed $precio
         * @param  mixed $porcentajeCacao
         * @param  mixed $peso
         * @return void
         */
        public function __construct($nombre,$numero,$precio,$porcentajeCacao,$peso){
            parent::__construct($nombre,$numero,$precio);
            $this->porcentajeCacao=$porcentajeCacao;
            $this->peso=$peso;
        }        
        /**
         * muestraResumen
         *
         * @return void
         */
        public function muestraResumen() :void{
            parent:: muestraResumen();
            echo "<br>Porcentaje de Cacao: $this->porcentajeCacao %";
            echo "<br>Peso: $this->peso g";
        }
    }
?>