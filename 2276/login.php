<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            Login
        </div>
        <div class="card-body">
            <form method="post">
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
                        <a href="register.php">Create a new account</a>
                    </p>
                    <p>
                        <a href="welcome.php">Welcome</a>
                    </p>
                    <button class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>