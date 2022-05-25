<?php
require_once ('dbhelper.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
	<header class="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-success">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="hidden-sm">
					<ul class="nav nav-left">
						<li class="nav-item active">
							<a class="nav-link text-white" href="main.php">Trang chủ<span class="sr-only">(current)</span></a>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Tin tức
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Nhập khẩu</a>
								<a class="dropdown-item" href="#">Xuất khẩu</a>
							</div>
						</li>
						
						<li class="nav-item">
							<a class="nav-link text-white" href="#">Sản phẩm<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="#">Giỏ hàng<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="#">Tài khoản<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="#">Liên hệ<span class="sr-only">(current)</span></a>
						</li>
					</ul>
				</div>

				<div class="menu-search">
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</div>
		</nav>
	</header>
    <div class="container">
        <div class="row pt-3">
			<div class="col-sm-3">
				<div class="card">
					<a href="productList.php"><h6 class="card-header list-group-header text-white bg-success">DANH MỤC SẢN PHẨM</h6></a>
					<div class="selection list-group-flush">
						<?php
							$sql = "select * from productlist";
							$productlist = executeResult($sql);

							foreach($productlist as $row) {
								echo '<span class="list-group-item list-group-item-action">'.$row['name'].'</span>';
							}
							
						?>
					</div>

				</div>
			</div>
            <div class="banner col-sm-9  ">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/1.jpg" height="290px" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/2.jpg" height="290px" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/3.jpg" height="290px" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="images/otngot.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" name="iphone">Ớt ngọt</h5>
                        <p>10,000,000₫</p>
                        <a href="#" class="btn btn-secondary">Thêm vào giỏ</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="images/otngot.jpg" alt="Card image cap">
                    <div class="card-body">
						<h5 class="card-title" name="iphone">Ớt ngọt</h5>
                        <p>10,000,000₫</p>
                        <a href="#" class="btn btn-secondary">Thêm vào giỏ</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="images/otngot.jpg" alt="Card image cap">
                    <div class="card-body">
						<h5 class="card-title" name="iphone">Ớt ngọt</h5>
                        <p>10,000,000₫</p>
                        <a href="#" class="btn btn-secondary">Thêm vào giỏ</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="images/otngot.jpg" alt="Card image cap">
                    <div class="card-body">
						<h5 class="card-title" name="iphone">Ớt ngọt</h5>
                        <p>10,000,000₫</p>
                        <a href="#" class="btn btn-secondary">Thêm vào giỏ</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 pt-3">
                <div class="card">
                    <img class="card-img-top" src="images/otngot.jpg" alt="Card image cap">
                    <div class="card-body">
						<h5 class="card-title" name="iphone">Ớt ngọt</h5>
                        <p>10,000,000₫</p>
                        <a href="#" class="btn btn-secondary">Thêm vào giỏ</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 pt-3">
                <div class="card">
                    <img class="card-img-top" src="images/otngot.jpg" alt="Card image cap">
                    <div class="card-body">
						<h5 class="card-title" name="iphone">Ớt ngọt</h5>
                        <p>10,000,000₫</p>
                        <a href="#" class="btn btn-secondary">Thêm vào giỏ</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 pt-3">
                <div class="card">
                    <img class="card-img-top" src="images/otngot.jpg" alt="Card image cap">
                    <div class="card-body">
						<h5 class="card-title" name="iphone">Ớt ngọt</h5>
                        <p>10,000,000₫</p>
                        <a href="#" class="btn btn-secondary">Thêm vào giỏ</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 pt-3">
                <div class="card">
                    <img class="card-img-top" src="images/otngot.jpg" alt="Card image cap">
                    <div class="card-body">
						<h5 class="card-title" name="iphone">Ớt ngọt</h5>
                        <p>10,000,000₫</p>
                        <a href="#" class="btn btn-secondary">Thêm vào giỏ</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 pt-3">
                <div class="card">
                    <img class="card-img-top" src="images/otngot.jpg" alt="Card image cap">
                    <div class="card-body">
						<h5 class="card-title" name="iphone">Ớt ngọt</h5>
                        <p>10,000,000₫</p>
                        <a href="#" class="btn btn-secondary">Thêm vào giỏ</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 pt-3">
                <div class="card">
                    <img class="card-img-top" src="images/otngot.jpg" alt="Card image cap">
                    <div class="card-body">
						<h5 class="card-title" name="iphone">Ớt ngọt</h5>
                        <p>10,000,000₫</p>
                        <a href="#" class="btn btn-secondary">Thêm vào giỏ</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 pt-3">
                <div class="card">
                    <img class="card-img-top" src="images/otngot.jpg" alt="Card image cap">
                    <div class="card-body">
						<h5 class="card-title" name="iphone">Ớt ngọt</h5>
                        <p>10,000,000₫</p>
                        <a href="#" class="btn btn-secondary">Thêm vào giỏ</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 pt-3">
                <div class="card">
                    <img class="card-img-top" src="images/otngot.jpg" alt="Card image cap">
                    <div class="card-body">
						<h5 class="card-title" name="iphone">Ớt ngọt</h5>
                        <p>10,000,000₫</p>
                        <a href="#" class="btn btn-secondary">Thêm vào giỏ</a>
                    </div>
                </div>
            </div>

        </div>
        <nav aria-label="Page navigation example" class="pt-3">
            <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item-"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>

        
</body>

</html>