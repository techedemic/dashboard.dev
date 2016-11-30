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
                //send email
                //die('passed');
                $app->response->redirect($app->urlFor('home'));
            }

        }

        $app->render('auth/password/recover.php', [
            'errors' => $v->errors(),
            'request' => $request
        ]);

})->name('auth.password.recover.post');

?>
