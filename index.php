<?php

require_once 'config/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
</head>
<style>
	th, td {
		padding: 10px;
	}
	th {
		background: #606060;
		color: #fff;
	}
	td {
		background: #b5b5b5;
	}
</style>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Description</th>
			<th>Price</th>
		</tr>

		<?php
			$products = mysqli_query($connect, "SELECT * FROM `products`");
			$products = mysqli_fetch_all($products);
			#print_r($products);
			foreach ($products as $product) {
			?>
			<tr>
			<td><?= $product[0] ?></td>	
			<td><?= $product[1] ?></td>	
			<td><?= $product[3] ?></td>	
			<td><?= $product[2] ?></td>	
			<td><a href="product.php?id=<?= $product[0] ?>">Просмотр</td>
			<td><a href="update.php?id=<?= $product[0] ?>">Изменить</td>
			<td><a href="vendor/delete.php?id=<?= $product[0] ?>">Удалить</td>
			</tr>
			<?php
			}
		?>

	</table>
	
	<h3>Добавить новый продукт</h3>
	<form action="vendor/create.php" method="post">
		<p>Заголовок</p>
		<input type="text" name="title">
		<p>Описание</p>
		<textarea name="description"></textarea>
		<p>Цена</p>
		<input type="number" name="price">
		<br> <br>
		<button type="submit">Добавить новый продукт</button>
	</form>

</body>
</html>
