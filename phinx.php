<?php

$config = require "config/local.php";

return [
    'paths'                => [
        'migrations' => 'db/migrations',
        'seeds'      => 'db/seeds',
    ],
    'environments' => [
        'default_migration_table' => 'migrations',
        'default_database'        => 'development',
        'development'             => [
            'adapter'   => 'mysql',
            'host'      => $config['development']['db_host'],
            'name'      => $config['development']['db_name'],
            'user'      => $config['development']['db_user'],
            'pass'      => $config['development']['db_pass'],
            'port'      => $config['development']['db_port'],
            'charset'   => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix'    => '',
        ],
        'production'              => [
            'adapter'   => 'mysql',
            'host'      => $config['production']['db_host'],
            'name'      => $config['production']['db_name'],
            'user'      => $config['production']['db_user'],
            'pass'      => $config['production']['db_pass'],
            'port'      => $config['production']['db_port'],
            'charset'   => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix'    => '',
        ],
    ],
];
