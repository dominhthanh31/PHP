<?php
    $listSV=[
        ['name'=>'a','email'=>'b','pwd'=>'c'],
        ['name'=>'a','email'=>'b','pwd'=>'c'],
        ['name'=>'a','email'=>'b','pwd'=>'c']
    ];

    if(!empty($_POST)){
        $name = $email = $pwd = "";

        if(isset($_POST["name"])){
            $name = $_POST["name"];
        }
        if(isset($_POST["email"])){
            $email = $_POST["email"];
        }
        if(isset($_POST["pwd"])){
            $pwd = $_POST["pwd"];
        }
        array_push($listSV, ['name'=>$name, 'email'=>$email, 'pwd'=>$pwd]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
        }

        .form-group{
            margin-bottom: 20px;
        }

        .card{
            margin: 20px;
        }
    </style>
</head>
<body>

<h1>Welcome to PHP tutorial</h1>
<div class="container">
    <div class="card border-priamry">
        <div class="card-header bg-primary" style="color: white">Management</div>
        <div class="cadrd-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>User name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // if(isset($name)&&isset($email)&&isset($pwd)){
                        //     echo "<tr>
                        //     <td></td>
                        //     <td>{$name}</td>
                        //     <td>{$email}</td>
                        //     <td>{$pwd}</td>
                        //         </tr>";

                        // }
                        foreach($listSV as $key => $sv){
                            echo "<tr>
                            <td></td>
                            <td>{$sv['name']}</td>
                            <td>{$sv['email']}</td>
                            <td>{$sv['pwd']}</td>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card border-primary">
        <div class="card-header bg-primary" style="color: white">Input detail infomation</div>
        <div class="card-body">
            <form action="" method="post">
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
                    <input type="password" class="form-control" name="pwd">
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