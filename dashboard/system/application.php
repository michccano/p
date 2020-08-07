<?php

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


$sql = "SELECT * from droplets where id=".$_GET["id"];
$result = $conn->query($sql);

//asdasd
$arr = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $arr = array("data"=>array("wpinfo"=>$row["wpinfo"],"ip"=>$row["ip"]));
  }

} 

else {
  echo "0 results";
}

$conn->close();

$r = json_encode($arr);
echo $r;

?>
