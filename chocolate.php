<?php

class chocolate extends Dulce {
    private int $porcentajeCacao;
    private float $peso;

    public function __construct(String $nombre, int $numero, int $precio, int $porcentajeCacao, float $peso){
        parent::__construct($nombre, $numero, $precio);
        $this-> porcentajeCacao = $porcentajeCacao;
        $this-> peso = $peso;
    }

    public function getPorcentajeCacao(){
        return $this->porcentajeCacao;

    }

    public function getPeso(){
        return $this->peso;
    }


    public function muestraResumen()
    {
        echo "<br>Porcentaje de cacao: " . 
        $this->porcentajeCacao . "g, peso: " . $this->peso;   
    }
}