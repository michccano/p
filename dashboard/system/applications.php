<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from droplets";
$result = $conn->query($sql);

$arr = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    array_push($arr,array("droplet_name"=>$row["droplet_name"]));
  }
} else {
  echo "0 results";
}

$conn->close();

$r = json_encode(array("data"=>$arr));
echo $r;

?>