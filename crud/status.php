<?php
include('db/db_connection.php');


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT status FROM students WHERE id=$id";
    $result = $conn->query($query);
    
    if($result){
        $student = $result->fetch_assoc();
        $status = $student['status'] == 1 ? 0 : 1;
    }

    $update = "UPDATE students SET status='$status' WHERE id=$id";
    $result = $conn->query($update);
    if($result){
        header("location:index.php");
    }else{
     echo "Status updated fail";
    }
} 

?>