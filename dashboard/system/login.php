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

$sql = "SELECT * from users where email='".$_POST["email"]."' and password='".$_POST["password"]."'";
$result = $conn->query($sql);

$arr = "";

if ($result->num_rows > 0) {
  $arr = array("message"=>"god");
} else {
  echo "0 results";
}

$conn->close();

$r = json_encode($arr);
echo $r;

?>