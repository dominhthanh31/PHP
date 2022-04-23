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
                        <th>No</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th style="width: 50px"></th>
                    </tr>
                </thead>
                <tbody>
<?php
$sql = "select * from student";
$data = executeResult($sql);

$index = 0;
foreach($data as $item){
    echo '<tr>
            <td>'.($index + 1).'</td>
            <td>'.$item['fullname'].'</td>
            <td>'.$item['email'].'</td>
            <td>'.$item['pwd'].'</td>
            <td>
                <button class="btn btn-danger">Delete</button>
            </td>
        </tr>';
    $index++;
}
?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>