<?php

return [

    'title' => 'Вход',

    'heading' => 'Вход',

    'actions' => [

        'register' => [
            'before' => 'или',
            'label' => 'регистрирайте акаунт',
        ],

        'request_password_reset' => [
            'label' => 'Забравена парола?',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'Имейл адрес',
        ],

        'password' => [
            'label' => 'Парола',
        ],

        'remember' => [
            'label' => 'Запомни ме',
        ],

        'actions' => [

            'authenticate' => [
                'label' => 'Вход',
            ],

        ],

    ],

    'messages' => [

        'failed' => 'Въведените данни липсват в нашата база данни.',

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Прекалено много опити',
            'body' => 'Моля, опитайте след :seconds секунди.',
        ],

    ],

];
