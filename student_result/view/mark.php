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

</head>

<body class="bg-light">
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card shadow-lg border-0">
                    <h4 class="text-center pt-4 fw-bold text-success">Add Student Marks</h4>
                    <div class="card-body">
                        <form action="insert-mark.php" method="POST">
                        <input type="hidden" name="student_id" value="<?= htmlspecialchars($id) ?>">

                            <div class="form-group mb-3">
                                <label class="form-label fw-bold text-dark">Bangla</label>
                                <input type="text" class="form-control border-success no-outline" name="bangla"
                                    placeholder="Enter your bangla mark">

                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label fw-bold text-dark">English</label>
                                <input type="text" class="form-control border-success no-outline" name="english"
                                    placeholder="Enter your english mark">

                                <div class="form-group mb-3">
                                    <label class="form-label fw-bold text-dark">Math</label>
                                    <input type="text" class="form-control border-success no-outline" name="math"
                                        placeholder="Enter your math mark">


                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label fw-bold text-dark">Physics</label>
                                    <input type="text" class="form-control border-success no-outline" name="physics"
                                        placeholder="Enter your physics mark">


                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label fw-bold text-dark">Chemistry</label>
                                    <input type="text" class="form-control border-success no-outline" name="chemistry"
                                        placeholder="Enter your chemistry mark">


                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label fw-bold text-dark">Biology</label>
                                    <input type="text" class="form-control border-success no-outline" name="biology"
                                        placeholder="Enter your biology mark">


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