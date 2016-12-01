<?php

use Slim\Slim;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

use Noodlehaus\Config;
use RandomLib\Factory as RandomLib;

use Dashboard\User\User;
use Dashboard\Mail\Mailer;
use Dashboard\Helpers\Hash;
use Dashboard\Validation\Validator;


use Dashboard\Middleware\BeforeMiddleware;
use Dashboard\Middleware\CsrfMiddleware;

session_cache_limiter(false);
session_start();

ini_set('display_errors', 'On');

define('INC_ROOT', dirname(__DIR__));

require INC_ROOT . '/vendor/autoload.php';

$app = new Slim([
    'mode' => rtrim(file_get_contents(INC_ROOT . '/mode.php')),
    'view' => new Twig(),
    'templates.path' => INC_ROOT . '/app/views'
]);

$app->add(new BeforeMiddleware);
$app->add(new CsrfMiddleware);

$app->configureMode($app->config('mode'), function() use ($app){
    $app->config = Config::Load(INC_ROOT . "/app/config/{$app->mode}.php");
});

require 'database.php';
require 'filters.php';
require 'routes.php';


$app->auth = false;

$app->container->set('user', function(){
    return new User;
});

$app->container->singleton('hash', function() use ($app){
    return new Hash($app->config);
});

$app->container->singleton('validation', function() use ($app){
    return new Validator($app->user, $app->hash, $app->auth);
});

$app->container->singleton('mail', function() use($app){
    $mailer = new PHPMailer;
    $mailer->SMTPOptions = array(
       'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
      )
    );
    $mailer->Host = $app->config->get('mail.host');
    $mailer->SMTPAuth = $app->config->get('mail.smtp_auth');
    $mailer->SMTPSecure = $app->config->get('mail.smtp_secure');
    $mailer->Port = $app->config->get('mail.port');
    $mailer->Username = $app->config->get('mail.username');
    $mailer->FromName = $app->config->get('mail.username');
    $mailer->Password = $app->config->get('mail.password');
    $mailer->SMTPDebug = true;
    $mailer->Debugoutput = 'html';
    $mailer->isHTML($app->config->get('mail.html')) ;
    $mailer->isSMTP();

    return new Mailer($app->view, $mailer);
}
);

$app->container->singleton('randomlib', function() use($app){
    $factory = new RandomLib;
    return $factory->getMediumStrengthGenerator();
});

$view = $app->view();

$view->parserOptions = [
    'debug' => $app->config->get('twig.debug')
];

$view->parserExtensions = [
    new TwigExtension
];

 ?>
