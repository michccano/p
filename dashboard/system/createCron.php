<?php


if(!empty($_POST)){
    function createCronFile(){
        $postedData = array();
            $postedData = $_POST;
            print_r($postedData);exit;
            $cronFile = fopen("cron.php", "w") or die("Unable to open file!");

            if (!is_resource($cronFile)) {
                return false;
            }
            return true;
    }

    createCronFile();
}


