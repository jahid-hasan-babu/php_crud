<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Student Results</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0 me-3">Student Results</h4>
                <a href="index.php"><button class="btn btn-success">Home</button></a>
            </div>
            <div class="card-body">
                <?php
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $subjects = ["Bangla", "English", "Math", "Physics", "Chemistry", "Biology"];
                    $totalPoints = 0;
                    $totalMarks = 0;
                    $totalSubjects = count($subjects);

                    echo "<h5>Student Name: " . htmlspecialchars($row["name"]) . "</h5>";
                    echo "<h6>Roll Number: " . htmlspecialchars($row["roll"]) . "</h6>";
                    echo "<hr>";

                    foreach ($subjects as $subject) {
                        $marks = $row[strtolower($subject)];
                        $grade = calculateGrade($marks);
                        $gradePoint = calculateGradePoint($marks);
                        $totalPoints += $gradePoint;
                        $totalMarks += $marks;

                        echo "<div class='row mb-2'>";
                        echo "<div class='col-md-4'><strong>$subject:</strong></div>";
                        echo "<div class='col-md-2'>" . htmlspecialchars($marks) . "</div>";
                        echo "<div class='col-md-3'>Grade: <span class='badge bg-" . ($grade == 'F' ? 'danger' : ($grade == 'A+' ? 'success' : 'primary')) . "'>$grade</span></div>";
                        echo "<div class='col-md-3'>Point: " . htmlspecialchars($gradePoint) . "</div>";
                        echo "</div>";
                    }

                    $averageGradePoint = $totalPoints / $totalSubjects;
                    $overallGrade = calculateGrade($averageGradePoint * 20);

                    echo "<hr>";
                    echo "<div class='row'>";
                    echo "<div class='col-md-6'><strong>Total Marks:</strong> " . htmlspecialchars($totalMarks) . "</div>";
                    echo "<div class='col-md-6'><strong>Total Grade Points:</strong> " . htmlspecialchars($totalPoints) . "</div>";
                    echo "<div class='col-md-6'><strong>Overall Grade:</strong> <span class='badge bg-" . ($overallGrade == 'F' ? 'danger' : ($overallGrade == 'A+' ? 'success' : 'primary')) . "'>$overallGrade</span></div>";
                    echo "</div>";
                } else {
                    echo "<p class='text-danger'>No results found for the given roll number.</p>";
                }
                ?>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>