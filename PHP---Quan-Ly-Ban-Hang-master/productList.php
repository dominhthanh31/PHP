<?php
require_once ('dbhelper.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Fruits Shop</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<div class="container">
		<table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>

                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="myTable">
            	<?php
					$sql      = "select * from productlist";
					$userList = executeResult($sql);
					// ends
					foreach ($userList as $row) {
						echo '<tr>
							<td>'.$row['id'].'</td>
							<td>'.$row['name'].'</td>
							<td><button class="btn btn-success" onclick=\'window.open("product.php?id='.$row['id'].'","_self")\'>Products</button></td>
	            			<td><button class="btn btn-warning" onclick=\'window.open("input.php?id='.$row['id'].'","_self")\'>Edit</button></td>
	            			<td><button class="btn btn-danger" onclick="deleteProduct('.$row['id'].')">Delete</button></td>

						</tr>';
					}
				?> 
			</tbody>
        </table>
		<a href="inputList.php" class="btn btn-secondary">Add new type of product</a>
		<script type="text/javascript">
        function deleteProduct(id) {
            option = confirm('Do you want to delete this product type?')
            if (!option) {
                return;
            }

            console.log(id)
            $.post('deleteList.php', {
                'id': id
            }, function(data) {
                alert(data)
                location.reload()
            })
        }
        </script>
    </div>
</body>