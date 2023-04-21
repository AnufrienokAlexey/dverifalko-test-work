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

    public function sendformAction() {
//        debug($_POST);
        $accessories = implode(' ', $_POST['accessories']);
        $this->model->sendForm($_POST['color'],
            $_POST['skin_color'],
            $_POST['handle_color'],
            $_POST['width'],
            $_POST['height'],
            $_POST['opening'],
            $accessories,
        );
//        $this->model->sendForm('asassaahhhsas');
//        $vars = [
//            'news' => $result,
//        ];
//        $this->view->render('Отправка данных', $vars);
    }
}