<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Student Management</title>
    <script>
    window.onload = function() {
        // Check if the roll parameter exists in the URL
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('roll')) {
            // Clear the input field value after the page loads
            document.getElementById('roll').value = '';
        }
    };
    </script>
</head>

<body>
    <div class="container mt-5">

        <!-- Search Form -->
        <div class="card mb-4">
            <div class="card-header bg-success">
                <h4 class="text-black fw-bold">Search Student Result By Roll Number</h4>
            </div>
            <div class="card-body bg-dark">
                <form method="GET" action="result.php">
                    <div class="row ">
                        <div class="col-md-10">
                            <input type="text" name="roll" id="roll" class="form-control"
                                placeholder="Enter Roll Number" required>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary w-100">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Student List -->
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center bg-dark">
                <h1 class="h4 text-success fw-bold ">Student List</h1>
                <a href="create.php" class="btn btn-success">Add Student</a>
            </div>
            <div class="card-body  bg-dark">
                <div class="table-responsive">
                    <table class="table table-striped bg-warning">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Student ID</th>
                                <th>Phone</th>
                                <th>Updated At</th>
                                <th>Action</th>
                                <th>Add Mark</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($students as $key => $student) {
                            ?>
                            <tr>
                                <td><?= ++$key ?></td>
                                <td><?= htmlspecialchars($student['name']) ?></td>
                                <td><?= htmlspecialchars($student['roll']) ?></td>
                                <td><?= htmlspecialchars($student['phone']) ?></td>
                                <td>
                                    <?= $student['updated_at'] ? date('d, M Y', strtotime($student['updated_at'])) : '--' ?>
                                </td>
                                <td>
                                    <a href="edit.php?id=<?= $student['id'] ?>"
                                        class="btn btn-primary btn-sm">Update</a>
                                    <a href="delete.php?id=<?= $student['id'] ?>"
                                        class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                <td>
                                    <a href="mark.php?id=<?= $student['id'] ?>" class="btn btn-success btn-sm">Mark</a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>