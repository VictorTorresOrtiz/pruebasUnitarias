<?php
namespace util;
include_once("vendor/autoload.php");

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

class LogFactory{
    public static function getLogger (string $canal = "miLog"): LoggerInterface{
        $log = new Logger($canal);
        $log->pushHandler(new StreamHandler("log/milog.log", Logger::DEBUG));

        return $log;
    }
}
?>