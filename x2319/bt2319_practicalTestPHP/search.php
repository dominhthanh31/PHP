<?php
require_once('./db/dbhelper.php');
require_once('./util/utility.php');

if(!empty($_GET)){
    $bookInfo = getGet('book');
}

$sql = "select * from books where title like '%$bookInfo%'";

$books = executeResult($sql, false);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thư viện</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style type="text/css">
        .form-group {
            margin-bottom: 20px;
        }

        .card {
            margin-bottom: 20px;
        }
    </style>

</head>

<body>
    <div class="container">
        <a href="index.php" class="btn btn-success">Danh sách sách</a>
        <nav class="navbar navbar-light bg-light">
            <form class="form-inline d-flex" method="get">
                <input class="form-control mr-sm-2" type="search" name="book" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
        <div class="card">
            <div class="card-header bg-info">
                <h3>Danh sách thông tin sách cần tìm</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>ISBN</th>
                            <th>Pub_year</th>
                            <th>Availble</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
    foreach ($books as $index => $book) {
        echo '<tr>
                <td>'.(++$index).'</td>
                <td>'.$book['title'].'</td>
                <td>'.$book['authorid'].'</td>
                <td>'.$book['ISBN'].'</td>
                <td>'.$book['pub_year'].'</td>
                <td>'.$book['available'].'</td>
            </tr>';
    }
?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>