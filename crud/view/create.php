<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
    .no-outline:focus {
        outline: none;
        box-shadow: none;
    }
    </style>

    <title>CRUD PROJECT</title>
</head>

<body class="bg-light">
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card shadow-lg border-0">
                    <h4 class="text-center pt-4 fw-bold text-success">Create Student</h4>
                    <div class="card-body">
                        <form action="insert.php" method="POST">
                            <div class="form-group mb-3">
                                <label class="form-label fw-bold text-dark">Name</label>
                                <input type="text" class="form-control border-success no-outline" name="name"
                                    placeholder="Enter your name">
                                <span class="text-danger"><?= isset($err_name) ? $err_name : '' ?></span>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label fw-bold text-dark">Student ID</label>
                                <input type="text" class="form-control border-success no-outline" name="student_id"
                                    placeholder="Enter your ID">
                                <span class="text-danger"><?= isset($err_student_id) ? $err_student_id : '' ?></span>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label fw-bold text-dark">Phone</label>
                                <input type="tel" class="form-control border-success no-outline" name="phone"
                                    placeholder="Enter your phone number">
                                <span class="text-danger"><?= isset($err_phone) ? $err_phone : '' ?></span>

                            </div>
                            <div class="form-group text-end">
                                <input type="submit" name="submit" class="btn btn-success mt-3 px-5 no-outline"
                                    value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>