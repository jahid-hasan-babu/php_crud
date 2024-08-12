<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h1>Student List</h1>
                    <a href="view/create.php" class="btn btn-success float-end">Add Student</a>
                </div>
                <div class="card-body">
                    <div class="col-12">

                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Student ID</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                    <th>Change status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($students as $key => $student){
                                ?>
                                <tr>
                                    <td><?= ++$key ?></td>
                                    <td><?= htmlspecialchars($student['name']) ?></td>
                                    <td><?= htmlspecialchars($student['student_id']) ?></td>
                                    <td><?= htmlspecialchars($student['phone']) ?></td>
                                    <td>
                                        <span class="badge <?= $student['status'] == 1 ? 'bg-success' : 'bg-danger' ?>">
                                            <?= $student['status'] == 1 ? 'Active' : 'Deactive' ?>
                                        </span>
                                    </td>
                                    <td>
                                        <?= $student['updated_at'] ? date('d, M Y', strtotime($student['updated_at'])) : '--' ?>
                                    </td>
                                    <td>
                                        <a href="edit.php?id=<?= $student['id'] ?>" class="btn btn-primary">Update</a>
                                        <a href=" delete.php?id=<?= $student['id'] ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                    <td>
                                        <a href="status.php?id=<?= $student['id'] ?>"
                                            class="btn <?= $student['status'] == 1 ? 'bg-warning' : 'bg-success' ?>""> <?= $student['status'] == 1 ? 'Deactive' : 'Active' ?></a>
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
    </div>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                                            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                                            crossorigin="anonymous">
                                            </script>

</body>

</html>