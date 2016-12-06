<?php
$app->get('/', $authenticated(), function() use($app){
    $app->render('home.php');
})->name('home');


 ?>
