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

$sql = "show status where `variable_name` = 'Threads_connected';";
$result = $conn->query($sql);

$tc =0;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	$tc = $row["Value"];
  }
} else {
  echo "0 results";
}

echo json_encode(array("Threads_connected"=>$tc));

?>
