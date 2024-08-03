<?php

return [
    'database' => [
        'class' => 'App\\Database\\Database',
        'parameters' => [
            'mysql:host=database:3306',
            'db',
            'user',
            'pass',
        ],
    ],
];