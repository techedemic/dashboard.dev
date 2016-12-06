<?php

use Illuminate\Support\Collection;

$app->get('/data/sample', function() use ($app){

    $data = json_decode(file_get_contents("data.json"), true);

    /////All down_slan greater than 0
    //$result = JmesPath\search("data[?to_number(down_slan) > `0`].[down_slan,location]", $data);

    $result = JmesPath\search("sum(sort_by(data,&region)[*].to_number(monitored))", $data);

    echo json_encode($result);

})->name('data.sample');
 ?>
