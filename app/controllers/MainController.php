<?php

namespace app\controllers;
use app\core\Controller;

class MainController extends Controller {
    public function indexAction() {
        $this->view->render('Главная страница');
    }

    public function contactAction() {
        $vars = [
            'name' => 'Вася',
            'age' => '42'
        ];
        $this->view->render('Контакты', $vars);
    }
}