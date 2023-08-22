<?php

return [

    'column_toggle' => [

        'heading' => 'Колони',

    ],

    'columns' => [

        'text' => [
            'more_list_items' => 'и :count още',
        ],

    ],

    'fields' => [

        'bulk_select_page' => [
            'label' => 'Маркирай/демаркирай избраните за общо триене.',
        ],

        'bulk_select_record' => [
            'label' => 'Маркирай/демаркирай :key за общо триене.',
        ],

        'search_query' => [
            'label' => 'Търсене',
            'placeholder' => 'Търсене',
            'indicator' => 'Търсене',
        ],

    ],

    'summary' => [

        'heading' => 'Общо',

        'subheadings' => [
            'all' => 'Всички :label',
            'group' => ':group общо',
            'page' => 'Тази страница',
        ],

        'summarizers' => [

            'average' => [
                'label' => 'Приблизително',
            ],

            'count' => [
                'label' => 'Брой',
            ],

            'sum' => [
                'label' => 'Общо',
            ],

        ],

    ],

    'actions' => [

        'disable_reordering' => [
            'label' => 'Край на подреждането',
        ],

        'enable_reordering' => [
            'label' => 'Подреди',
        ],

        'filter' => [
            'label' => 'Филтър',
        ],

        'group' => [
            'label' => 'Грипа',
        ],

        'open_bulk_actions' => [
            'label' => 'Групови действия',
        ],

        'toggle_columns' => [
            'label' => 'Превключи колона',
        ],

    ],

    'empty' => [

        'heading' => 'Няма :model',

        'description' => 'Създай :model за начало.',

    ],

    'filters' => [

        'actions' => [

            'remove' => [
                'label' => 'Изчисти филтъра',
            ],

            'remove_all' => [
                'label' => 'Изчисти всички филтри',
                'tooltip' => 'Изчисти всички филтри',
            ],

            'reset' => [
                'label' => 'Ресет',
            ],

        ],

        'heading' => 'Филтри',

        'indicator' => 'Активни филтри',

        'multi_select' => [
            'placeholder' => 'Всички',
        ],

        'select' => [
            'placeholder' => 'Всички',
        ],

        'trashed' => [

            'label' => 'Изтрити записи',

            'only_trashed' => 'Само итрити записи',

            'with_trashed' => 'С изтрити записи',

            'without_trashed' => 'Без изтрити записи',

        ],

    ],

    'grouping' => [

        'fields' => [

            'group' => [
                'label' => 'Групирай по',
                'placeholder' => 'Групирай по',
            ],

            'direction' => [

                'label' => 'Посока на групиране',

                'options' => [
                    'asc' => 'Възходящо',
                    'desc' => 'Низходящо',
                ],

            ],

        ],

    ],

    'reorder_indicator' => 'Влачи запис за подреждане.',

    'selection_indicator' => [

        'selected_count' => '1 избран запис|:count избрани записи',

        'actions' => [

            'select_all' => [
                'label' => 'Избери всички :count',
            ],

            'deselect_all' => [
                'label' => 'Размаркирай всички',
            ],

        ],

    ],

    'sorting' => [

        'fields' => [

            'column' => [
                'label' => 'Сортирай по',
            ],

            'direction' => [

                'label' => 'Посока на сортиране',

                'options' => [
                    'asc' => 'Възходящо',
                    'desc' => 'Низходящо',
                ],

            ],

        ],

    ],

];
