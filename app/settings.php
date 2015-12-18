<?php

return [
    'settings' => [
        // DB settings
        'database' => [
            'host'     => 'localhost',
            'username' => '',
            'password' => '',
            'db'       => '',
            'port'     => 3306,
            'prefix'   => 'db_',
            'charset'  => 'utf8',
        ],
        // View settings
        'view'     => [
            'path' => __DIR__ . '/../templates/'
        ],
        // Caching setting
        'cache'    => [
            'path'           => __DIR__ . '/../cache',
            'cacheActive'    => TRUE,
            'compressActive' => TRUE,
            'lifetime'       => 1800,
            'debug'          => TRUE,
            'whitelist'      => []
        ],
        // Slim Settings
        'settings' => [
            'displayErrorDetails' => true,
        ],
        'session'  => [
            'name'     => 'myApp',
            'lifetime' => 7200,
            'path'     => null,
            'domain'   => null,
            'secure'   => false,
            'httponly' => true,
        ],
    ],
];
