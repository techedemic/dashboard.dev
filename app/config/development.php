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
            'host' => 'localhost',
            'name' => 'dashboard',
            'username' => 'dbuser',
            'password' => 'dbpassword',
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
            'password' => 'h3nDr1sCh03',
            'port' => 587,
            'html' => true
        ],
        'twig' => [
            'debug' => true
        ],
        'csrf' => [
            'session' => 'csrf_token'
        ]

];
 ?>
