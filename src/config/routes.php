<?php

$services = require('services.php');

return [
    'GET' => [
        '' => [
            'controller' => 'HomePageController@index',
        ],
        'users' => [
            'controller' => 'UsersController@index',
            'services' => [
                'database' => $services['database'],
            ]
        ],
    ],
];