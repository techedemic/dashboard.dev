<?php
return[
        'app' => [
            'url' => 'https://www.synththis.com',  /* No trailing slash ('/')*/
            'subfolder' => "", /* in dev mode, the app might be in a subfolder of a general /var/www/html folder or similar. Remember the leading slash ('/')*/
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
            'host' => 'mail.bynes.co.za',
            'username' => 'admin@synththis.com',
            'password' => 'client_pass',
            'port' => 587,
            'html' => true
        ],
        'twig' => [
            'debug' => true
        ],
        'csrf' => [
            'key' => 'csrf_token'
        ]

];
 ?>
