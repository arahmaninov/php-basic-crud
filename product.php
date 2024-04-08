<?php
	require_once 'config/connect.php';

	$id = $_GET['id'];
	$product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$id'");
	$product = mysqli_fetch_assoc($product);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Просмотр продукта</title>
</head>
<body>
	<h2>Название: <?= $product['title'] ?></h2>
	<h4>Цена: <?= $product['price'] ?></h4>
	<p><?= $product['description'] ?></p>
</body>
</html>
