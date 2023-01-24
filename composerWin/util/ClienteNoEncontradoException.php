<?php
namespace util;

include_once("./autoload.php"); 
include_once("PasteleriaException.php");


use src\util\PasteleriaException;

class ClienteNoEncontradoException extends PasteleriaException
{
    public function clientError (){
        $cliente = new PasteleriaException();
        $cliente = ClienteNoEncontradoException();
    }
}