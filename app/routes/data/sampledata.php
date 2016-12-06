<?php

use Illuminate\Support\Collection;

$app->get('/data/sample', function() use ($app){

    $data = json_decode(file_get_contents("data.json"), true);

    /////All down_slan greater than 0
    //$result = JmesPath\search("data[?to_number(down_slan) > `0`].[down_slan,location]", $data);

    /////All monitored
    $result = JmesPath\search("sum(sort_by(data,&region)[*].to_number(monitored))", $data);

    echo json_encode($result);

})->name('data.sample');

$app->get('/data/counter', function() use($app){
    $request = $app->request();

    $groupBy = $request->get('group_by');
    $sum = $request->get('sum');
    $dsname = $request->get('dsname');

    $data = json_decode(file_get_contents($dsname), true);
    $dataInner = $data["data"];

    $aggrData = array();
    $total = 0;
    foreach ($dataInner as $record) {
      $id = $record[$groupBy];
      if (isset($aggrData[$id])) {
         $aggrData[$id][0] += $record[$sum];
      } else {
         $aggrData[$id] = array($record[$sum]);
      }
      $total += $record[$sum];
    }

    $returnData = array([
            "total" => $total,
            "data" => $aggrData
        ]);

    echo json_encode($returnData);

    //$result = JmesPath\search("to_array(sum(data[*].to_number({$sum})))", $data);
    //echo json_encode($result);

})->name('data.counter.post');
 ?>
