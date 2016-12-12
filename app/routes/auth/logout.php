<?php
$app->get('/logout', function() use($app){
    unset($_SESSION[$app->config->get('auth.session')]);

    if($app->getCookie($app->config->get('auth.remember')))
    {
        $app->auth->removeRememberCredentials();
        $app->deleteCookie($app->config->get('auth.remember'));
    }

    $app->logger->debug("You have been logged out");
    $app->flash('global','You have been logged out');
    return $app->response->redirect($app->urlFor('login'));
})->name('logout');
 ?>
