<?php

return [

    'single' => [

        'label' => 'Свържи',

        'modal' => [

            'heading' => 'Свържи :label',

            'fields' => [

                'record_id' => [
                    'label' => 'Запис',
                ],

            ],

            'actions' => [

                'associate' => [
                    'label' => 'Свържи',
                ],

                'associate_another' => [
                    'label' => 'Свържи & свържи друг',
                ],

            ],

        ],

        'notifications' => [

            'associated' => [
                'title' => 'Свързан',
            ],

        ],

    ],

];
