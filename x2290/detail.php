<?php
require_once ('dbhelper.php');

$sql      = "select * from products where id=".$_GET['id'];
$items = executeResult($sql);
$item = $items[0];
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$item['title']?></title>
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


<div style="display: flex;margin-top: 30px;margin-left: 20px;border: solid 1px gray;">
	
	 
		
		<div style="width: 30%">
			<div style="width: 80%;margin-right: 0px" >
				<img src="<?=$item['thumbnail']?>" style="width: 100%;"> 
		</div>
		</div>
		<div style="width: 60%">
			<p>
				<?=$item['title']?>
			</p>
			<br>
			<p>
				<?=$item['content']?>
			</p>
			<p>
				10.000 vnđ
			</p>
			  <button class="btn btn-success" onclick="addcart(<?=$item['id']?>)">add to cart</button>

		</div>

	</div>
</div>
<script type="text/javascript">
 

		function addcart(id) {
			console.log(document.cookie);
			
			//JSON.parse & JSON.stringify
			if(document.cookie == "")
					cart = [
					 			{

					 				"id": id,
					 				"num": 1
					 			}
					 		]

			else
			{
				var cartJson = getCookie("cart");
				var cart = JSON.parse(cartJson);
					var check=0;
				for (var i = cart.length - 1; i >= 0; i--) {
					if (cart[i]['id']==id) {
						cart[i]['num']++;
						check=1;
						break;
					}
				}
					if(check==0) cart.push({
					 				"id": id,
					 				"num": 1
					 			})
			}
				
				setCookie('cart',JSON.stringify(cart),7);

		}

function setCookie(cname, cvalue, exdays) {
		  var d = new Date();
		  d.setTime(d.getTime() + (exdays*24*60*60*1000));
		  var expires = "expires="+ d.toUTCString();
		  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
	 
	 
</script>


</body>
</html>