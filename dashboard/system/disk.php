<?php
$a = shell_exec('du --block-size=MiB --max-depth=1 ../ | sort -r -n');
$arr = explode("\n", $a);


$all = array();
$total = 0;

foreach($arr as $a){

	$tmp = explode("	",$a);
	$total += (int)str_replace("MiB","",$tmp[0]);

	array_push($all,array("folder"=>str_replace("../","",$tmp[1]),"size"=>$tmp[0]));
	
//	echo $tmp[1];
}


$servername = "localhost";
$username = "root";
$password = "123wet123P@";
$dbname = "app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT TABLE_NAME AS 'Table', ROUND((DATA_LENGTH + INDEX_LENGTH) / 1024 ) AS 'Size' FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'app' ORDER BY (DATA_LENGTH + INDEX_LENGTH) DESC;";


$result = $conn->query($sql);

$total_db = 0;

$tables = array();

 while($row = $result->fetch_assoc()) {
   
   $total_db += (int)$row["Size"];

    array_push($tables, array("table_name"=>$row["Table"],"size"=>$row["Size"]));


  }


  $tb = "";
  if($total_db<1000){
  	$tb = $total_db."KB";
  }




$arr1 = array("tables"=>$tables,"total_size"=>$tb);


$conn->close();


$result = array("disk_data"=>array("message"=>$all,"total"=>$total),"db_data"=>$arr1);

$ttt = json_encode($result);



echo $ttt;