<?php
$app->get('/dashboard/view',function() use ($app){
    $app->render('dashboard/viewer.php');
})->name('dashboard.view');

 ?>
