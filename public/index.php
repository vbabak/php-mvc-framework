<?php

define('APPLICATION_PATH', realpath(__DIR__ . DIRECTORY_SEPARATOR .'..' . DIRECTORY_SEPARATOR . 'App'));

require_once "../autoloader.php";

$fc_factory = new \MVC\FrontController\FrontControllerFactory();
$front_controller = $fc_factory->create();

$front_controller->run();

