<?php
class Bollo extends Dulce{

private bool $relleno;

public function __construct(String $nombre, int $numero, int $precio, bool $relleno){
    parent::__construct($nombre, $numero, $precio);
    $this-> relleno = $relleno;
}

public function getRelleno(){

    if($this->relleno == true){
        return "Si";
    }else{
        return "No";
    }
    
}

public function muestraResumen(){

    echo "<br>Relleno: " . $this -> relleno;    
}

}