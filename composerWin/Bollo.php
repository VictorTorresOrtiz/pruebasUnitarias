<?php 
include_once("vendor/autoload.php");

class Bollo extends Dulces
{

    public function __construct(
        string $nombre,
        int $numero,
        float $precio,
        private string $relleno
    ) {
        parent::__construct($nombre, $numero, $precio);
    }

    public function getRelleno(): string
    {
        return $this->relleno;
    }


    public function setRelleno($relleno): void
    {
        $this->relleno = $relleno;
    }

    public function muestraResumen(): void
    {
        echo parent::muestraResumen() . "<p>El relleno: " . $this->getRelleno() . "</p>";
    }
}
?>