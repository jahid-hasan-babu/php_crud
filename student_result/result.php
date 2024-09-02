<?php
include('db/db_connection.php');

function calculateGrade($marks) {
    if ($marks >= 80) return "A+";
    if ($marks >= 70) return "A";
    if ($marks >= 60) return "A-";
    if ($marks >= 50) return "B";
    if ($marks >= 40) return "C";
    if ($marks >= 33) return "D";
    return "F";
}

function calculateGradePoint($marks) {
    if ($marks >= 80) return 5.00;
    if ($marks >= 70) return 4.00;
    if ($marks >= 60) return 3.50;
    if ($marks >= 50) return 3.00;
    if ($marks >= 40) return 2.00;
    if ($marks >= 33) return 1.00;
    return 0.00;
}

if (isset($_GET['roll'])) {
    $roll = $_GET['roll'];

    $sql = "
        SELECT students.name, students.roll, result.*
        FROM students
        INNER JOIN result ON students.id = result.student_id
        WHERE students.roll = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $roll);
    $stmt->execute();
    $result = $stmt->get_result();

    $conn->close();
    include('view/result.php');
} else {
    header("Location: view/index.php");
    exit();
}
?>