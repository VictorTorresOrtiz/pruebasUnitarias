<?php
namespace tests;
use Tarta;

include_once("../vendor/autoload.php");
include_once("../Tarta.php");


use PHPUnit\Framework\TestCase;

class testTarta extends TestCase
{
    public function testConstructor()
    {
        $tarta = new Tarta("Tarta de Kitkat para olga", 41, 25, 9, 3, 5,4);
        $this->assertSame($tarta->getNombre(), "Tarta de Kitkat para olga");
        $this->assertSame($tarta->getNumero(), 4);
        $this->assertSame($tarta->getPrecio(), 20000.0);
    }

    public function testSetRellenos()
    {
        $tarta = new Tarta("Tarta de Kitkat para olga", 41, 25, 9, 3, 5,4);
        $tarta->setRellenos(["Nata", "Chocolate"]);
        $this->expectOutputString("YA LAS CAGADO PRIMO: tu tarta es una mierda ");
    }
}