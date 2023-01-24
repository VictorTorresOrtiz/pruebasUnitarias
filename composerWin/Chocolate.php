<?php 
include_once("vendor/autoload.php");

class Chocolate extends Dulces
{

    public function __construct(
        string $nombre,
        int $numero,
        float $precio,
        private float $porcentajeCacao,
        private float $peso
    ) {
        parent::__construct($nombre, $numero, $precio);
    }

    public function getPorcentajeCacao(): float
    {
        return $this->porcentajeCacao;
    }

    public function setPorcentajeCacao($porcentajeCacao): void
    {
        $this->porcentajeCacao = $porcentajeCacao;
    }

    public function getPeso(): float
    {
        return $this->peso;
    }

    public function setPeso($peso): void
    {
        $this->peso = $peso;
    }

    public function muestraResumen(): void
    {
        echo parent::muestraResumen() . "<p>%Cacao: " . $this->getPorcentajeCacao() . "</p>
        <p>Peso: " . $this->getPeso() . "g</p>";
    }
}
?>