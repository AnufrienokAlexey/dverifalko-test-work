<?php
//$path = $_SERVER['DOCUMENT_ROOT'] . '/dverifalko-test-work/app/views/main/telegramform/tmp/';
//debug($path);
return [
    '' => [
        'controller' => 'main',
        'action' => 'index'
    ],
    'contact' => [
        'controller' => 'main',
        'action' => 'contact'
    ],
    'sendform' => [
        'controller' => 'main',
        'action' => 'sendform'
    ],
    'account/login' => [
        'controller' => 'account',
        'action' => 'login'
    ],
    'account/register' => [
        'controller' => 'account',
        'action' => 'register'
    ],
    'news/show' => [
        'controller' => 'news',
        'action' => 'show'
    ],
];