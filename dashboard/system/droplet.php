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

$sql = "insert into droplets (droplet_id,droplet_name) values ('".$_POST["droplet_id"]."','".$_POST["droplet_name"]."')";


$result = $conn->query($sql);


$arr = array("message"=>"Good");


$conn->close();

$r = json_encode($arr);
echo $r;

?>