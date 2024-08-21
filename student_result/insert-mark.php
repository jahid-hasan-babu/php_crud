<?php 
include('db/db_connection.php');

if(isset($_POST['submit'])){
    // Get the student_id from the hidden form field
    $student_id = $_POST['student_id'];
    
    // Check if the student_id already exists in the result table
    $checkQuery = "SELECT * FROM result WHERE student_id = '$student_id'";
    $checkResult = $conn->query($checkQuery);

    if($checkResult->num_rows > 0){
        // If a record is found, prevent insertion and display an error message
        echo "<script>alert('Marks for this student are already inserted.');</script>";
        echo "<script>window.location.href='mark.php?id=$student_id';</script>";
    } else {
        // Retrieve marks from the form
        $bangla = $_POST['bangla'];
        $english = $_POST['english'];
        $math = $_POST['math'];
        $physics = $_POST['physics'];
        $chemistry = $_POST['chemistry'];
        $biology = $_POST['biology'];

        // Insert the new marks record into the result table
        $insert = "INSERT INTO result (student_id, bangla, english, math, physics, chemistry, biology) 
                   VALUES ('$student_id', '$bangla', '$english', '$math', '$physics', '$chemistry', '$biology')";
        
        if($conn->query($insert) === TRUE){
            // Redirect to index.php or display a success message
            header("Location: index.php");
            exit;
        } else {
            // Display an error message if the insertion fails
            echo "Data insertion failed: " . $conn->error;
        }
    }
} else {
    echo "Form submission error.";
}
?>