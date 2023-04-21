<?php

namespace app\controllers;
use app\core\Controller;
use app\lib\Db;

class MainController extends Controller {
    public function indexAction() {
        $db = new Db;
        $params = [
            'id' => 3,
        ];
        $data = $db->column('SELECT name FROM users WHERE id = :id', $params);
        debug($data);

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