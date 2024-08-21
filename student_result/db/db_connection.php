<?php 
define("HOST", 'localhost');
define("USERNAME", 'root');
define("PASSWORD", '');
define("DATABASE", 'student_result');

//create connection
$conn = new mysqli(HOST, USERNAME, PASSWORD,DATABASE);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully"; 



?>