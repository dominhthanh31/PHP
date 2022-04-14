<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        .form-group {
            margin-bottom: 20px;
        }

        .container {
            padding: 10px;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="card border-primary">
        <div class="card-header bg-primary" style="height: 50px; color: white ">
                Input detail infomation
        </div>
        <div class="card-body">
            <form methor="get">
                <div class="form-group">
                    <label>User Name: </label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Email: </label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Password: </label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    if(!empty($_GET)) {
        $name = $email = $password = "";

        if(isset($_GET['name'])) {
            $name = $_GET['name'];
        }

        if(isset($_GET['email'])) {
            $email = $_GET['email'];
        }

        if(isset($_GET['password'])) {
            $password = $_GET['password'];
        }

        echo $name."<br>";
        echo $email."<br>";
        echo $password."<br>";
    }
?>
</body>
</html>