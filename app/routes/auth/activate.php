<?php
    $app->get('/activate', $guest(), function () use ($app){

        $request = $app->request;
        $email = $request->get('email');
        $identifier = $request->get('identifier');

        $hashedIdentifier = $app->hash->hash($identifier);

        $user = $app->user->where('email', $email)
                        ->where('active', false)
                        ->first();

        if (!$user || !$app->hash->hashCheck($user->active_hash, $hashedIdentifier)){
            $app->flash('global',"Unable to activate your account OR Account already active. Please attempt to log in.");
            return $app->response->redirect($app->urlFor('login'));
        } else {
            $user->activateAccount();
            $app->flash('global','Your account has been activated. Please sign in.');
            return $app->response->redirect($app->urlFor('login'));
        }

    })->name('activate');

 ?>
