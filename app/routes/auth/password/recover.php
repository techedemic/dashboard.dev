<?php
$app->get('/recover-password', $guest(), function() use ($app){
        $app->render('auth/password/recover.php');
})->name('auth.password.recover');

$app->post('/recover-password', $guest(), function() use ($app){
        $request = $app->request;

        $email = $request->post('email');

        $v = $app->validation;

        $v->validate([
            'email' => [$email, 'required|email']
        ]);

        if($v->passes())
        {
            $user = $app->user->where('email', $email)->first();
            if(!$user)
            {
                $app->flash('global','No matching email address found');
                $app->response->redirect($app->urlFor('auth.password.recover'));
            } else {

                $identifier = $app->randomlib->generateString(128);
                $user->update([
                    'recover_hash' =>$app->hash->hash($identifier)
                ]);

                $app->mail->send('email/auth/password/recover.php', ["user" => $user, "identifier" => $identifier], function($message) use ($user){
                    $message->to($user->email);
                    $message->subject("Recover your password");
                });

                $app->flash('global',"Please check you email at {$email} for additional instructions");

                return $app->response->redirect($app->urlFor('home'));
            }

        }

        $app->render('auth/password/recover.php', [
            'errors' => $v->errors(),
            'request' => $request
        ]);

})->name('auth.password.recover.post');

?>
