<?php

use Monolog\Handler\FirePHPHandler;
use Monolog\Logger;
use PHPUnit\Util\Xml\Loader;

$log = new Logger("FirePHP");
$log->pushHandler(new FirePHPHandler(Logger::INFO));

$datos = ["real" => "Brece Wayne", "personaje" => "Batman"];
$log-> debug("Mesaje DEBUG", $datos);
$log->info("Mesaje INFO", $datos);
$log->warning("Mesaje WARNING", $datos);

