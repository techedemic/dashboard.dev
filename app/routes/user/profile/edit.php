<?php

$app->get('/user/edit', $authenticated(), function() use ($app){
    $app->render('user/profile/edit.php');
})->name('user.profile.edit');

$app->post('/user/edit',$authenticated(), function() use ($app){
    $request = $app->request();

    $email = $request->post('email');
    $firstName = $request->post('first_name');
    $lastName = $request->post('last_name');

    $v = $app->validation;

    $v->validate([
        'email' => [$email, 'required|email|uniqueEmail'],
        'first_name' => [$firstName, 'alpha|max(100)'],
        'last_name' => [$lastName, 'alpha|max(100)']
    ]);

    $user = $app->auth;

    if($v->passes()){
        $user->update([
            'email' => $email,
            'first_name' => $firstName,
            'last_name' => $lastName
        ]);
        $app->flash('global','Your details have been updated');
        $app->response->redirect($app->urlFor('user.profile.edit'));
    }
    $app->render('user/profile/edit.php', [
        'errors' => $v->errors(),
        'request' => $request
    ]);

})->name('user.profile.edit.post');


 ?>
