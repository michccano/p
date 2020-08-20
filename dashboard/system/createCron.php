<?php

include_once('DatabaseConnection.php');
include_once('AppHelper.php');


$requestType = $_SERVER['REQUEST_METHOD'];
$dataToView = array();

if ($requestType === 'POST'){

    if(!empty($_POST)){
        function saveCron(){
            $postedData = $_POST;

            // Insert Cron Data into DB
            $databaseConn = new DatabaseConnection();
            $sqlQuery = "INSERT INTO cron_jobs (application_id, cron_option, minutes, hours, days, month, week, cron_type, command, created_at, updated_at) 
                      VALUES (4, '". $postedData['cron_option']. "', '". $postedData['minutes']. "', '". $postedData['hours']. "',
                      '". $postedData['days']. "', '". $postedData['month']. "', '". $postedData['week']. "', '". $postedData['cron_type']. "', 
                      '". $postedData['cron_name']. "', '". date('Y-m-d h:m:s'). "','". date('Y-m-d h:m:s'). "')";
            $response = $databaseConn->query($sqlQuery);
            $databaseConn->destroyConnection();

            // Fetch Crons Data from DB
            if($response['status']){
                $databaseConn = new DatabaseConnection();
                $sqlQuery = "SELECT id, application_id, cron_option, minutes, hours, days, month, week, cron_type, command, created_at, updated_at FROM cron_jobs ORDER BY id DESC";
                $response = $databaseConn->query($sqlQuery, 'select');

                $dataToView['crons'] = array();
                if ($response['records'] != ''){
                    while($row = mysqli_fetch_assoc($response['records'])) {
                        $dataToView['crons'][] = $row;
                    }
                }
                $databaseConn->destroyConnection();

                $dataToView['cronJobsHTML'] = cronJobsHTML($dataToView['crons']);
                $dataToView['status'] = 'success';
            }else{
                $dataToView['status'] = 'fail';
                $dataToView['message'] = 'Cron is not saved';
            }

            echo json_encode($dataToView);
        }


        saveCron();
    }

}elseif ($requestType === 'GET'){
    $databaseConn = new DatabaseConnection();
    $sqlQuery = "SELECT id, application_id, cron_option, minutes, hours, days, month, week, cron_type, command, created_at, updated_at FROM cron_jobs ORDER BY id DESC";
    $response = $databaseConn->query($sqlQuery, 'select');
    $dataToView['crons'] = array();
    if ($response['records'] != ''){
        while($row = mysqli_fetch_assoc($response['records'])) {
            $dataToView['crons'][] = $row;
        }
    }
    $dataToView['cronJobsHTML'] = cronJobsHTML($dataToView['crons']);
    $dataToView['status'] = 'success';
    echo json_encode($dataToView);
}


function cronJobsHTML($crons){
    $html = '';
    if(count($crons) > 0){
        foreach ($crons as $cron){
            $html .= '<div class="row mb-3">
                    <div class="col-md-12">
                        '.$cron["command"].'
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">Type '.cronTypes($cron["cron_type"]).'</div>
                            <div class="col-md-2">Minutes '.$cron["minutes"].'</div>
                            <div class="col-md-1">Hours '.$cron["hours"].'</div>
                            <div class="col-md-1">Days '.$cron["days"].'</div>
                            <div class="col-md-1">Month '.$cron["month"].'</div>
                            <div class="col-md-1">Week '.$cron["week"].'</div>
                            <div class="col-md-2">
                                <i class="fa fa-edit mr-3 pointer-event edit_cron" data-cron-id="'.$cron["id"].'"></i>
                                <i class="fa fa-trash pointer-event delete_cron" data-cron-id="'.$cron["id"].'"></i>
                            </div>
                        </div>
                    </div>
                </div>';
        }
    }else{
        $html = '<p>No Cron Jobs here. Add one now.</p>';
    }
    return $html;
}
//do that please make it work so you can insert cron using that web form
//anda get existing list


 //Yes i am working on that but i will you help on accomplish that?
//can you run that?

// You can view the result in dev tool
//



