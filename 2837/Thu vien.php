<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
        $n = rand(3, 15);
        $booklist = [];
        for($i = 0; $i < $n; $i ++){
            $booklist[$i] = [
                "title" => "Sach ".rand(1,15),
                "thumbnail" => "Noi dung ".rand(1,15),
                "price" => "Gia ".rand(1,15)
            ];
        }
        // echo '<pre>';
        // var_dump($booklist);
        // echo '</pre>';
    ?>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Thumbnail</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($booklist as $key => $book){
                    echo '<tr>';
                        echo "<td> {$book['title']} </td>";
                        echo "<td> {$book['thumbnail']} </td>";
                        echo "<td> {$book['price']} </td>";
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>