<?php

class Tarta extends Dulce{
    private $rellenos;
    private int $nPisos;
    private int $minComesales = 2;
    private int $maxComesales;


    public function __construct(String $nombre, int $numero, int $precio, array $rellenos, int $nPisos, 
    int $minComensales, int $maxComensales){
        parent::__construct($nombre, $numero, $precio);
        $this-> rellenos[] = $rellenos;
        $this-> nPisos = $nPisos;
        $this-> minComensales = $minComensales;
        $this-> maxComensales = $maxComensales;
    }

    public function muestraComensales(){

        if($this -> minComensales == 1 && $this -> maxComensales <=2 ){
            echo "<br>Mínimo 2 comensales.";
        }else if($this -> minComensales > 2 || $this -> maxComensales > 2){
            echo "<br>Más de 2 comensales";
        }
        
    }


    public function getRellenos(){
        echo "Relleno: " + print_r($this->rellenos);
    }

    public function getPisos(){
        return $this->nPisos;
    }

    public function muestraResumen()
    {
        echo "Relleno: " + print_r($this->rellenos);

        echo "Capas: " . $this -> nPisos . ", Comensales necesarios: "
        . $this->minComensales . ", Comensales máximos : " . $this-> maxComensales;

    }



}
