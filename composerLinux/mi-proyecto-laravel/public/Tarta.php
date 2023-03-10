<?php
include "Dulces.php";

/**
 * Tarta
 */
class Tarta extends Dulces{    
    /**
     * rellenos
     *
     * @var array
     */
    public $rellenos=[];    
    /**
     * numPisos
     *
     * @var mixed
     */
    private $numPisos;    
    /**
     * minNumComensales
     *
     * @var mixed
     */
    private $minNumComensales;    
    /**
     * maxNumComensales
     *
     * @var mixed
     */
    private $maxNumComensales;    
    /**
     * __construct
     *
     * @param  mixed $nombre
     * @param  mixed $numero
     * @param  mixed $precio
     * @param  mixed $rellenos
     * @param  mixed $numPisos
     * @param  mixed $minNumComensales
     * @param  mixed $maxNumComensales
     * @return void
     */
    public function __construct($nombre,$numero,$precio,$rellenos,$numPisos,$minNumComensales,$maxNumComensales){
        parent::__construct($nombre,$numero,$precio);
        $this->rellenos=$rellenos;
        $this->numPisos=$numPisos;
        $this->minNumComensales=$minNumComensales;
        $this->maxNumComensales=$maxNumComensales;
    }  
    public function getNumPisos(): int
    {
        return $this->numPisos;
    }

    public function setNumPisos($numPisos): void
    {
        $this->numPisos = $numPisos;
    }

    public function getRellenos()
    {
        return $this->rellenos;
    }

    public function setRellenos($rellenos): void
    {
        if (count($rellenos) == $this->getNumPisos()) {
            foreach ($rellenos as $relleno) {
                array_push($this->rellenos, $relleno);
            }
        } else {
            echo "Error: la tarta debe tener el mismo número de rellenos que de pisos";
        }
    }

    /**
     * muestraComensalesPosibles
     *
     * @return void
     */
    public function muestraComensalesPosibles(){
        if($this->minNumComensales==1 && $this->maxNumComensales==1){
            echo "Para un comensal";
        }else if($this->minNumComensales==$this->maxNumComensales){
            echo "Para $this->minNumComensales comensales";
        }else{
            echo "De $this->minNumComensales a $this->maxNumComensales comensales";
        }
    }    
    /**
     * muestraResumen
     *
     * @return void
     */
    public function muestraResumen() :void {
        parent:: muestraResumen();
        echo "<br>";
        echo "Rellenos:";
        foreach($this->rellenos as $r){
            echo "<ol>";
            echo "-$r";
            echo"</ol>";
        }
        echo "Pisos: $this->numPisos";
        echo "<br>";
        echo $this->muestraComensalesPosibles(); 
    }
}
?>