<?php
include('db/db_connection.php');

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if($result){
    $students = $result->fetch_all(MYSQLI_ASSOC);
    include('view/index.php');
} 

?>