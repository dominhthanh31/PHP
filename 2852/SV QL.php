<?php
session_start();

$name = $email = $pwd = "";

if(!empty($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $_SESSION['name'] = $name;
	$_SESSION['email'] = $email;
	$_SESSION['pwd'] = $pwd;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
        .form-group{
            margin-bottom: 20px;
        }
        .card{
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header bg-info">
            Management
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
<?php
        echo "<tr>
            <td></td>
            <td>{$_SESSION['name']}</td>
            <td>{$_SESSION['email']}</td>
            <td>{$_SESSION['pwd']}</td>
        </tr>";

?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header bg-primary" style="color: white">
            Input detail infomation
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label>User Name: </label>
                    <input type="text" name="name" class="form-control">
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
                    <button type="submit" class="btn btn-success">Register</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>