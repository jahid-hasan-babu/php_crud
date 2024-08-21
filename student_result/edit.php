<?php
include('db/db_connection.php');


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM students WHERE id=$id";
    $result = $conn->query($query);


    if($result){
        $student = $result->fetch_assoc();
        include('view/edit.php');
    }
} 