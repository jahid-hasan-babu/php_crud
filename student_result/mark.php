<?php 
 // Get the student ID from the URL
 $id = isset($_GET['id']) ? $_GET['id'] : null;

if (!$id) {
    die("Invalid student ID");
}
include('view/mark.php');

?>