<?php
$app->get('/dashboard/view',$authenticated(),function() use ($app){
    $app->render('dashboard/viewer.php');
})->name('dashboard.view');

$app->get('/dashboard/widget_counter', $authenticated(),function() use ($app){
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

})->name('dashboard.widget_counter');

$app->get('/dashboard/info/:identifier',function($identifier) use ($app){

    //TODO: Implement data side of this. For now, hard coded values

    $returnData = array(
            [
                    "id" => "1",
                    "type" => "widget_counter",
                    "title" => "Region: Monitored",
                    "icon" => "fa-dashboard",
                    "color" => "primary",
                    "group_by" => "region",
                    "sum" => "monitored",
                    "datasource" => "data.json"
                ],[
                    "id" => "2",
                    "type" => "widget_counter",
                    "title" => "Region: Site Down",
                    "icon" => "fa-upload fa-rotate-180",
                    "color" => "red",
                    "group_by" => "region",
                    "sum" => "down_slan",
                    "datasource" => "data.json"
                ],[
                    "id" => "3",
                    "type" => "widget_counter",
                    "title" => "Region: Primary WAN Down",
                    "icon" => "fa-upload fa-rotate-180",
                    "color" => "yellow",
                    "group_by" => "region",
                    "sum" => "down_swan",
                    "datasource" => "data.json"
                ],[
                    "id" => "4",
                    "type" => "widget_counter",
                    "title" => "Region: Backup Link Active",
                    "icon" => "fa-code-fork",
                    "color" => "green",
                    "group_by" => "region",
                    "sum" => "up_bwan",
                    "datasource" => "data.json"
                ],[
                    "id" => "5",
                    "type" => "widget_counter",
                    "title" => "Region: Backup Link Down",
                    "icon" => "fa-code-fork",
                    "color" => "yellow",
                    "group_by" => "region",
                    "sum" => "down_bwan",
                    "datasource" => "data.json"
                ],[
                    "id" => "6",
                    "type" => "widget_counter",
                    "title" => "Region: Wifi Users",
                    "icon" => "fa-wifi",
                    "color" => "green",
                    "group_by" => "region",
                    "sum" => "connections",
                    "datasource" => "datawifi.json"
                ],[
                    "id" => "7",
                    "type" => "widget_counter",
                    "title" => "PLOC: Wifi Users",
                    "icon" => "fa-building-o",
                    "color" => "green",
                    "group_by" => "ploc",
                    "sum" => "connections",
                    "datasource" => "datawifi.json"
                ]

        );

    echo json_encode($returnData);

})->name('dashboard.info');


 ?>
