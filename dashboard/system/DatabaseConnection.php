<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 8/19/20
 * Time: 1:58 PM
 */

class DatabaseConnection{
    public $connection;

    function __construct() {
        $servername = 'localhost';
        $username = 'homestead';
        $password = 'secret';
        $dbname = 'app';

        try{
            // Create connection
            $this->connection = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if ($this->connection === false) {
                throw new Exception(mysqli_connect_error());
            }
        }catch (Exception $e){
            $this->error_message($e->getMessage());
        }

        return $this->connection;

    }

    public function query($query, $queryType = NULL)
    {
        $response = array();
        if($result = mysqli_query($this->connection, $query)){
            if($queryType == 'select'){
                if (mysqli_num_rows($result) > 0) {
                    $response['records'] =  $result;
                } else {
                    $response['records'] = '';
                }
            }
            $response['msg'] = "success.";
            $response['status'] = true;
        } else{
            $response['msg'] = "ERROR: Could not able to execute $query. " . mysqli_error($this->connection);
            $response['status'] = false;
        }
        return $response;
    }

    // This will be called at the end of the script.
    public function destroyConnection()
    {
        // Close connection
        mysqli_close($this->connection);
    }


}