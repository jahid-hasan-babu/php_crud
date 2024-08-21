<?php
include('db/db_connection.php');

if(isset($_POST['submit'])){
   $id = $_POST['id'];
   $name = $_POST['name'];
   $roll = $_POST['roll'];
   $phone = $_POST['phone'];
   $updated_at = date('Y-m-d H:i:s');

   $query = "UPDATE students SET name='$name', roll='$roll',phone='$phone',updated_at='$updated_at' WHERE id=$id";

   $result = $conn->query($query);
   if($result){
     header("location:index.php");
   }else{
    echo "Data updated fail";
   }
}
?>