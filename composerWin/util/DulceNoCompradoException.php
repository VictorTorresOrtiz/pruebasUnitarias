<?php 

namespace util;

include_once 'PasteleriaException.php';
include_once 'vendor/autoload.php';

use Exception;
use util\PasteleriaException;
class DulceNoComprado extends PasteleriaException {

    function __construct(String $message = "", int $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    public function getExceptionMessage(){
        return $this->message;
    }
}

?>