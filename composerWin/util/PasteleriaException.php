<?php 
namespace util;

include_once("vendor/autoload.php");
use Exception;

class PasteleriaException extends Exception{

    function ClienteNoEncontrado () {
        echo "Cliente no existente.";
    }

    function dulceNotFound () {
        echo "Producto Eliminado.";
    }

    function dulceCompradoError () {
        echo "Producto comprado anteriormente";
    }

}

?>