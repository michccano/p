<?php

include_once('DatabaseConnection.php');



if(!empty($_POST)){
    function createCronFile(){
        $dataToView = array();
        $postedData = $_POST;

        // Insert Cron Data into DB
        $databaseConn = new DatabaseConnection();
        $sqlQuery = "INSERT INTO cron_jobs (application_id, cron_option, minutes, hours, days, month, week, cron_type, command, created_at, updated_at) 
                      VALUES (4, '". $postedData['cron_option']. "', '". $postedData['minutes']. "', '". $postedData['hours']. "',
                      '". $postedData['days']. "', '". $postedData['month']. "', '". $postedData['week']. "', '". $postedData['cron_type']. "', 
                      '". $postedData['cron_name']. "', '". date('Y-m-d h:m:s'). "','". date('Y-m-d h:m:s'). "')";
        $response = $databaseConn->query($sqlQuery);

        // Fetch Crons Data from DB
        if($response['status']){
            $sqlQuery = "SELECT id, application_id, cron_option, minutes, hours, days, month, week, cron_type, command, created_at, updated_at FROM cron_jobs ORDER BY id DESC";
            $response = $databaseConn->query($sqlQuery, 'select');

            if ($response['records'] != ''){
                while($row = mysqli_fetch_assoc($response['records'])) {
                    $dataToView['crons'][] = $row;
                }
            }
            cronJobsHTML($dataToView['crons']);
            $dataToView['status'] = 'success';
        }else{
            $dataToView['status'] = 'fail';
        }

        echo json_encode($dataToView);
    }

    function cronJobsHTML($crons){
        if(count($crons) > 1){

        }
    }

    createCronFile();
}
//do that please make it work so you can insert cron using that web form
//anda get existing list


 //Yes i am working on that but i will you help on accomplish that?
//can you run that?

// You can view the result in dev tool
//



