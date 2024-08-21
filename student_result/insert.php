<?php 
include('db/db_connection.php');


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $phone = $_POST['phone'];

    $err_name = '';
    $err_roll = '';
    $err_phone = '';
    $err = false;

    if(empty($name)){
        $err = true;
        $err_name = 'Name field is required !';
       }
    
       if(empty($roll)){
        $err = true;
        $err_roll = 'Roll is required !';
       }else{
        $sql = "SELECT * FROM students WHERE roll = '$roll'";
        $result = $conn->query($sql);
        if($result){
          $student = mysqli_fetch_assoc($result);
          if($student){
            $err = true;
            $err_roll = 'Roll already has been taken !';
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
        $insert = "INSERT INTO students (name, roll, phone) VALUES ('$name','$roll','$phone')";
    
        $result = $conn->query($insert);
        if($result){
            
          header("location:index.php");
        }else{
         echo "Data inserted fail";
        }
       
    }
}




?>