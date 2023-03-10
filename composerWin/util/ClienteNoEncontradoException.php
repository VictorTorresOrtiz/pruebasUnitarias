<?php 
namespace util;
class ClienteNoEncontradoException extends PasteleriaException{
    public function __construct(
        $message="Error: Cliente no encontrado",
        $code = 0,
        $previa = null)
    {
        parent::__construct($message,$code,$previa);
    }

    public function messageException(){
        return $this->message;
    }
}