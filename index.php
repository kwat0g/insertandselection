<?php
    include('insert.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>
<body class="bg-primary">
    
    <div class="container w-50">
        <div class="card mt-5">
            <div class="card-header">
                <h1 class="text-center">INPUT</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <form action="" method="post">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <label for="firstname" class="form-label">FIRST NAME</label>
                                            <input type="text" name="firstname" id="firstname" class="form-control" required>
                                        </div>
                                        <div class="col">
                                            <label for="lastname" class="form-label">LAST NAME</label>
                                            <input type="text" name="lastname" id="lastname" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="email" class="form-label">EMAIL</label>
                                            <input type="email" name="email" id="email" class="form-control" required>
                                        </div>
                                        <div class="col">
                                            <label for="bday" class="form-label">BIRTHDATE</label>
                                            <input type="date" name="bday" id="bday" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mt-3">
                                            <a href="records.php" class="btn btn-default btn-secondary w-100">VIEW RECORDS</a>
                                        </div>
                                        <div class="col mt-3">
                                            <button class="btn btn-default btn-danger w-100">SUBMIT</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>