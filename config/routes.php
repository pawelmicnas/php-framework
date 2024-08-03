<?php

$services = require('services.php');

return [
    'GET' => [
        '' => [
            'controller' => 'HomepageController@index',
            'services' => [
                'database' => $services['database'],
            ]
        ],
    ],
];