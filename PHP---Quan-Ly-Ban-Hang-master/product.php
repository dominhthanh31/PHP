<?php
require_once ('dbhelper.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Fruits Shop</title>
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
                    <th>Price</th>
                    <th>Description</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="myTable">
            	<?php
					$sql      = "select * from product";
					$userList = executeResult($sql);
					$index = 1;
					// ends
					foreach ($userList as $row) {
						echo '<tr>
							<td>'.$index++.'</td>
							<td>'.$row['name'].'</td>
							<td>'.$row['price'].'</td>
	            			<td>'.$row['description'].'</td>
	            			<td><button class="btn btn-warning" onclick=\'window.open("input.php?id='.$row['id'].'","_self")\'>Edit</button></td>
	            			<td><button class="btn btn-danger" onclick="deleteProduct('.$row['id'].')">Delete</button></td>

						</tr>';
					}
				?> 
			</tbody>
        </table>
		<a href="input.php" class="btn btn-secondary">Add new product</a>
		<script type="text/javascript">
        function deleteProduct(id) {
            option = confirm('Do you want to delete this product?')
            if (!option) {
                return;
            }

            console.log(id)
            $.post('deleteProduct.php', {
                'id': id
            }, function(data) {
                alert(data)
                location.reload()
            })
        }
        </script>
    </div>
</body>