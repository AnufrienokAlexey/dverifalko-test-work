<?php

namespace app\controllers;
use app\core\Controller;

class AccountController extends Controller {
    public function loginAction() {
        $this->view->redirect('/dverifalko-test-work/');
        $this->view->render('Вход');
    }

    public function registerAction() {
        $this->view->render('Регистрация');
    }
}