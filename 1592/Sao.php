<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n = rand(1, 100);
        echo"n = $n <br>";
        for($i = 0; $i <= $n; $i++){
            for($y = 0; $y < $i; $y++){
                echo "*";
            }
            echo "<br>";
        }
    ?>
</body>
</html>