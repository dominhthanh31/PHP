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
        $random = rand(1, 100);
        echo "Random $random number: ";
        $list = [];

        for($i = 1; $i <= $random; $i++){
            $number = rand(1, 100);
            $list [] = $number;
            echo $number.', ';
        }
        echo "<br><br>";
        sort($list);
        echo "Number: ";
        foreach($list as $n){
            echo "$n, ";
        }
    ?>
</body>
</html>