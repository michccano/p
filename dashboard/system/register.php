<?php

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");


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




$sql = "SELECT * from users where email='".$_POST["email"]."' and password='".$_POST["password"]."'";

$result = $conn->query($sql);

$arr = "";



if ($result->num_rows > 0) {

$stmnt = $conn->prepare("insert into users (email,password) values (?,?)");
$stmnt->bind_param("ss",$email,$pw);

$email = $_POST["email"];
$pw = $_POST["password"];

$stmnt->execute();
$stmnt->close();

  
} 


else {




$arr = array("message"=>"god");


}

$conn->close();



$r = json_encode($arr);
echo $r;

?>