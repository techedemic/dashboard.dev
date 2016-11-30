<?php
return[
        'app' => [
            'url' => 'http://dashboard.dev',
            'hash' => [
                'algo' => PASSWORD_BCRYPT,
                'cost' => 10
            ]
        ],
        'db' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'name' => 'dashboard',
            'username' => 'dbuser',
            'password' => 'dbpass',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => ''
        ],
        'auth' => [
            'session' => 'user_id',
            'remember' => 'user_r'
        ],
        'mail' => [
            'smtp_auth' => true,
            'smtp_secure' => 'tls',
            'host' => 'smtp.gmail.com',
            'username' => 'hendrisch@gmail.com',
            'password' => 'blabla',
            'port' => 587,
            'html' => true
        ],
        'twig' => [
            'debug' => false
        ],
        'csrf' => [
            'key' => 'csrf_token'
        ]

];
 ?>
