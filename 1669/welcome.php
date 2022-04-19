<?php
    $name = $email = $pwd = $address = ""; 

        if(isset($_COOKIE["name"])){
            $name = $_COOKIE["name"];
        }
        if(isset($_COOKIE["email"])){
            $email = $_COOKIE["email"];
        }
        if(isset($_COOKIE["pwd"])){
            $pwd = $_COOKIE["pwd"];
        }
        if(isset($_COOKIE["address"])){
            $address = $_COOKIE["address"];
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
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
            Welcome
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?=$name?></td>
                        <td><?=$email?></td>
                        <td><?=$pwd?></td>
                        <td><?=$address?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>