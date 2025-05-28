<?php

return [
    'driver'    => $_ENV['DB_CONNECTION'] ?: 'mysql',
    'host'      => $_ENV['DB_HOST'] ?: '127.0.0.1',
    'port'      => $_ENV['DB_PORT'] ?: '3306',
    'database'  => $_ENV['DB_DATABASE'] ?: 'test',
    'username'  => $_ENV['DB_USERNAME'] ?: 'root',
    'password'  => $_ENV['DB_PASSWORD'] ?: '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
];
