<?php
include __DIR__ ."/vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use PHPUnit\Util\Xml\Loader;


$log = new Logger("Test Logger");
$log-> pushHandler(new StreamHandler("logs/milog.log", Logger::DEBUG));

$log-> debug("Mensaje del debug");
$log-> info("Mensaje de Info");
$log-> warning("Mesaje de Warning");
$log-> error("Mensaje de Error");
$log-> critical("Mensaje de Critical");
$log-> alert("Mensaje de Alerta");

$log-> warning("Producto no encontrado", [$producto]);
$log-> warning("Producto no encontrado", ["datos" => $producto]);

//Errores 
$log-> pushHandler(new StreamHandler("php://stderr", Logger::DEBUG));



