<?php

return [

    'title' => 'Възстановяване на парола',

    'heading' => 'Възстановяване на парола',

    'form' => [

        'email' => [
            'label' => 'Имейл адрес',
        ],

        'password' => [
            'label' => 'Парола',
            'validation_attribute' => 'парола',
        ],

        'password_confirmation' => [
            'label' => 'Потвърдете паролата',
        ],

        'actions' => [

            'reset' => [
                'label' => 'Възстанови паролата',
            ],

        ],

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Too many reset attempts',
            'body' => 'Please try again in :seconds seconds.',
        ],

    ],

];
