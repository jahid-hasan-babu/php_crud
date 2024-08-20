<?php
include('db/db_connection.php');

if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $student_id = $_POST['student_id'];
   $phone = $_POST['phone'];


   $err_name = '';
   $err_student_id = '';
   $err_phone = '';
   $err = false;


   if(empty($name)){
    $err = true;
    $err_name = 'Name field is required !';
   }

   if(empty($student_id)){
    $err = true;
    $err_student_id = 'Student id is required !';
   }else{
    $sql = "SELECT * FROM students WHERE student_id = '$student_id'";
    $result = $conn->query($sql);
    if($result){
      $student = mysqli_fetch_assoc($result);
      if($student){
        $err = true;
        $err_student_id = 'Student already has been taken !';
      }
    }
   }

   if(empty($phone)){
    $err = true;
    $err_phone = 'Phone number is required !';
   }elseif(!is_numeric($phone)){
    $err = true;
    $err_phone = 'Phone number must be numeric !';
   }elseif(strlen($phone) > 11 || strlen($phone) < 11 ){
    $err = true;
    $err_phone = 'Phone number must eleven digit !';
   }


   if($err){
    include("view/create.php");
   }else{
    $insert = "INSERT INTO students (name,student_id, phone) VALUES ('$name','$student_id','$phone')";

    $result = $conn->query($insert);
    if($result){
      header("location:index.php");
    }else{
     echo "Data inserted fail";
    }
   }




}
?>