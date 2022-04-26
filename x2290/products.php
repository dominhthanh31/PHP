<?php
require_once ('dbhelper.php');
$sql      = "select * from products";
$items = executeResult($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>products Page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>



<div class="container " style="margin-top: 50px">
	<div class="row">
<?php
$count = 0;
foreach ($items as $item) {
	echo '

	<div class="col-md-3" style="margin-top: 20px">
		<div class="card" style="width:100%">
    		<img class="card-img-top" src="'.$item['thumbnail'].'" alt="Card image" style="width:100%">
    <div class="card-body">
      <p class="card-text">'.$item['title'].'</p>
      <a href="detail.php?id='.$item['id'].'" class="btn btn-primary">detail</a>
	    </div>
	  </div>
	</div>

	';
}
?>
	</div>	
  
</div>
</body>
</html>