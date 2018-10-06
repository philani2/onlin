<!DOCTYPE html>
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
input.thingy {
    background: none repeat scroll 0 0 #5699ce;
    border-color: #f3f7ff #6991af #477ea9 #d2e7ef;
    border-radius: 10px 10px 10px 10px;
    border-style: solid;
    border-width: 1px;
    box-shadow: 1px 1px 3px #333333;
    color: #FFFFFF;
    cursor: pointer;
    font-weight: bold;
	padding: 5px;
	align: center;
    text-shadow: 1px 1px 1px #000000;
}
</style>
<body>
	<form action="#" method="get" enctype="multipart/form-data">
		<table class ="table" align="center" width ="750" border="2" >
			<tr align="center">
				<th colspan="8"><h1>Products</h1></th>
			</tr>
			<tr><th><h3>Title</h3></th></tr>
			<tr><th><h3><input type="text" name="title" id=""></h3></th></tr>
			<tr><th><h3>Price</h3></th></tr>
			<tr><th><h3><input type="text" name="price" id=""></h3></th></tr>
			<tr><th><h3>Quantity</h3></th></tr>
			<tr><th><h3><input type="text" name="quantity" id=""></h3></th></tr>
			<tr><th><h3>Catergory</h3></th></tr>
			<tr><th><h3><select name="catergory">
				<option value="tv">TV's</option>
				<option value="cell">Cellphones</option>
				<option value="radio">Radios</option>
				<option value="speaker">Speaker</option>
				<option value="dvd">DVD's</option>
			</select></h3></th></tr>
			<tr><th><h3>Image</h3></th></tr>
			<tr><th><h3>
				<!--<input class="thingy" type="file" name="img" accept="image/*">-->
				<input class="thingy" type="file" value="Some Button">

				</h3></th></tr>

			<tr><th colspan="8"><h1><input name="submit" type="submit" value="Update"></h1></th></tr>
		</table>
	</form>
</body>
</html>
