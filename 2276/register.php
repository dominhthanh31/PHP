<?php
    require_once('utility.php');
    require_once('dbhelper.php');
    require_once('process_form.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .card{
            margin-top: 20px;
        }

        .form-group{
            margin-bottom: 20px
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header bg-info">
            Register
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label>Full Name: </label>
                    <input type="text" name="fullname" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email: </label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password: </label>
                    <input type="password" name="pwd" class="form-control">
                </div>
                <div class="form-group">
                    <p>
                        <a href="login.php">I have a account</a>
                    </p>
                    <button class="btn btn-success">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

