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

$sql = "show status like 'Conn%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    var_dump($row);
  }
} else {
  echo "0 results";
}

?>