<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php
        $ten = "Do Minh Thanh";
        $tuoi = 19;
        $diachi = "Ha Noi";
        $email = "dominhthanh2003@gmail.com";
        $SDT = "0123456789";

        echo '
        <table class="table table bordered">
            <tr>
                <th>Ten</th>
                <th>Tuoi</th>
                <th>Dia chi</th>
                <th>Email</th>
                <th>SDT</th>
            </tr>
            <tr>
                <td>'.$ten.'</td>
                <td>'.$tuoi.'</td>
                <td>'.$diachi.'</td>
                <td>'.$email.'</td>
                <td>'.$SDT.'</td>
            </tr>
        </table>  
        ';
    ?>
</body>
</html>