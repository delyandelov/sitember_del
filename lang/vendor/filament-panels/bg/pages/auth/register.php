<?php

return [

    'title' => 'Регистрация',

    'heading' => 'Регистрация',

    'actions' => [

        'login' => [
            'before' => 'или',
            'label' => 'влезте във Вашия акаунт',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'Имейл адрес',
        ],

        'name' => [
            'label' => 'Име',
        ],

        'password' => [
            'label' => 'Парола',
            'validation_attribute' => 'парола',
        ],

        'password_confirmation' => [
            'label' => 'Потвръди парола',
        ],

        'actions' => [

            'register' => [
                'label' => 'Регистрирай ме',
            ],

        ],

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Прекалено много опити',
            'body' => 'Моля, опитайте след :seconds секунди.',
        ],

    ],

];
