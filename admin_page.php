<!DOCTYPE html>

<?php
	include ("connect/connection.php");
?>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/admin_page.css" />
	<script src="main.js"></script>
</head>
<style>

</style>
<body>
	<form action="insert_product.php" method="post" enctype="multipart/form-data">
		<table class ="table" align="center" width ="750" border="2" >
			<tr align="center">
				<th><h1>Products</h1></th>
			</tr>
			<tr><th><h3>Title</h3></th></tr>
			<tr><th><h3><input size="30" type="text" name="name" id=""></h3></th></tr>
			<tr><th><h3>Price</h3></th></tr>
			<tr><th><h3><input size="30" type="text" name="price" id=""></h3></th></tr>
			<tr><th><h3>Quantity</h3></th></tr>
			<tr><th><h3><input size="30" type="text" name="quantity" id=""></h3></th></tr>
			<tr><th><h3>Catergory</h3></th></tr>
			<tr><th><h3><select name="category">
				<option>Select a catergory</option>
				<!--?php
					$get_catergory = "select * from item_category";

					$result = mysqli_query($con,$get_catergory);
					while($cater = mysqli_fetch_array($result))
					{
						$list = $cater['item_category'];
						echo "<option>$list</option>";
					}
				?!-->
				<option value="tv">TV's</option>
				<option value="cellphone">Cellphones</option>
				<option value="radio">Radios</option>
				<option value="speaker">Speaker</option>
				<option value="dvd">DVD's</option>
			</select></h3></th></tr>
			<tr><th><h3>Image</h3></th></tr>
			<tr><th><h3>
				<input type="file" name="image" accept="image/*">
				</h3></th></tr>

			<tr><th><h1><input name="submit" type="submit" value="Update"></h1></th></tr>
		</table>
	</form>
</body>
</html>
