<?php

namespace app\core;

class Router
{
    protected $routes = [];
    protected $params = [];

    public function __construct() {
        $arr = require 'app/config/routes.php';
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
    }

    public function add($route, $params) {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }

    public function match() {
        $url = substr($_SERVER['REQUEST_URI'], 22);
        $url = trim($url, '/');
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function run() {
        if ($this->match()) {
            $controller = 'app/controllers/'.ucfirst($this->params['controller']).'Controller.php';
            if (class_exists($controller)) {
                echo 'найден';
            } else {
                echo 'Не найден: '.$controller;
            }
        } else {
            echo 'Маршрут не найден! Страница 404.';
        }
    }
}