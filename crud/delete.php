<?php
include('db/db_connection.php');


$id = $_GET['id'];
$sql = "DELETE  FROM `students` WHERE id=$id";
$result = $conn->query($sql);

if($result){
    header("location:index.php");
} 

?>