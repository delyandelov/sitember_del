<?php

return [

    'title' => 'Потвърдете имейл адреса си',

    'heading' => 'Потвърдете имейл адреса си',

    'actions' => [

        'resend_notification' => [
            'label' => 'Повторно изпращане',
        ],

    ],

    'messages' => [
        'notification_not_received' => 'Не получихте имейл?',
        'notification_sent' => 'Ние Ви изпратихме имейл на :email съдържащ инструкции как да потвърдите Вашия имейл.',
    ],

    'notifications' => [

        'notification_resent' => [
            'title' => 'Изпратихме Ви нов имейл.',
        ],

        'notification_resend_throttled' => [
            'title' => 'Прекалено много опити',
            'body' => 'Моля, опитайте отново след :seconds секунди.',
        ],

    ],

];
