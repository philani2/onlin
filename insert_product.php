<?php
	require_once ('connect/connection.php');

	$item_name = $_POST['name'];
	$item_price = $_POST['price'];
	$item_category = $_POST['category'];
	$item_image = $_POST['image'];
	$item_qty = $_POST['quantity'];

	$sql = "INSERT INTO products(item_name, item_price, item_category, item_image, item_qty)
	VALUES ($item_name, $item_price, $item_category, $item_image, $item_qty)";
	$result = mysqli_query($con, $sql);
	if ($result)
{
?>
<p>
 <?php echo $item_name; ?> added successfully <br> <a href="admin_page.php">TRY AGIAN</a> or <a href="index.php">GO HOME</a>
</p>
<?php
}
else
{
 echo "Some error occurred. try agian";
 echo "<a href=\"admin_page.php\">TRY AGIAN</a>";
}

?>
