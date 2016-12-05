<?php
$app->get('/password-reset', $guest(), function() use ($app){

        $request = $app->request();

        $email = $request->get('email');
        $identifier = $request->get('identifier');

        $hashedIdentifier = $app->hash->hash($identifier);

        $user = $app->user->where('email', $email)->first();

        if(!$user){
            $app->flash('global', 'No recovery possible for this user. Please re-submit the Forgot Password request');
            return $app->response->redirect($app->urlFor('home'));
        }

        if(!$user->recover_hash){
            $app->flash('global', 'Password Recovery was not requested for this user. Please re-submit the Forgot Password request');
            return $app->response->redirect($app->urlFor('home'));
        }

        if(!$app->hash->hashCheck($user->recover_hash,$hashedIdentifier))
        {
            $app->flash('global', 'Invalid Password Reset request. Please re-submit the Forgot Password request');
            return $app->response->redirect($app->urlFor('home'));
        }

        $app->render('auth/password/reset.php', [
            'email' => $user->email,
            'identifier' => $identifier
        ]);

})->name('auth.password.reset');

$app->post('/password-reset', $guest(), function() use ($app){
        $request = $app->request();

        $email = $request->get('email');
        $identifier = $request->get('identifier');
        $password = $request->post('password');
        $passwordConfirm = $request->post('password_confirm');

        $hashedIdentifier = $app->hash->hash($identifier);

        $user = $app->user->where('email', $email)->first();

        if(!$user){
            $app->flash('global', 'No recovery possible for this user. Please re-submit the Forgot Password request');
            return $app->response->redirect($app->urlFor('home'));
        }

        if(!$user->recover_hash){
            $app->flash('global', 'Password Recovery was not requested for this user. Please re-submit the Forgot Password request');
            return $app->response->redirect($app->urlFor('home'));
        }

        if(!$app->hash->hashCheck($user->recover_hash,$hashedIdentifier))
        {
            $app->flash('global', 'Invalid Password Reset request. Please re-submit the Forgot Password request');
            return $app->response->redirect($app->urlFor('home'));
        }

        $v = $app->validation;

        $v->validate([
            'password' => [$password, 'required|min(6)'],
            'password_confirm' => [$passwordConfirm, 'required|matches(password)']
        ]);

        $v->addRuleMessages([
            'min' => 'The password needs to be at least 6 characters',
            'required'      => 'This is a required field',
            'matches' => 'Your passwords do not match'
        ]);

        if($v->passes()){
            $user->update([
                'password' => $app->hash->password($password),
                'recover_hash' => null
            ]);
            $app->flash('global', 'Your password has been reset. Please sign in again');
            return $app->response->redirect($app->urlFor('home'));
        }

        $app->render('auth/password/reset.php', [
            'errors' =>$v->errors(),
            'email' => $user->email,
            'identifier' => $identifier
        ]);

})->name('auth.password.reset.post');
