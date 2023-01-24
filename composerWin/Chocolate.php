<?php 
    include_once "Dulces.php";    
    /**
     * Chocolate
     */
    class Chocolate extends Dulces{        
        /**
         * porcentajeCacao
         *
         * @var mixed
         */ 
        private $porcentajeCacao;        
        /**
         * peso
         *
         * @var mixed
         */
        private $peso;        
        /**
         * __construct
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