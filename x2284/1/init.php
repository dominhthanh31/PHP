<?php
require_once('utils/utility.php');
require_once('db/dbhelper.php');

if(!empty($_POST)) {
	//Khoi tao database
	init();

	execute(SQL_CREATE_TABLE_USER);
	execute(SQL_CREATE_TABLE_GIFT);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Init Database</title>
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
<div class="container" style="text-align: center;">
	<form method="post">
		<div class="form-group">
			<button class="btn btn-success" style="width: 300px; margin-top: 30px;" name="action" value="init">Init Database</button>
		</div>
	</form>
</div>
</body>
</html>