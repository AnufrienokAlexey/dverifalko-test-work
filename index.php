<?php

use app\lib\Connect;

require 'app/lib/dev.php';
//include "vendor/autoload.php";

spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});

session_start();

$router = new \app\core\Router();
$router->run();
