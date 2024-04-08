<?php
	require_once 'config/connect.php';

	$id = $_GET['id'];
	$res = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$id'");
	$product = mysqli_fetch_assoc($res);
	print_r($product);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Обновление</title>
</head>
<body>
         <h3>Обновить продукт</h3>
         <form action="vendor/update.php" method="post">
		<input type="hidden" value="<?= $product['id'] ?>" name="id">
                 <p>Заголовок</p>
		 <input type="text" name="title" value="<?= $product['title'] ?>">
                 <p>Описание</p>
		 <textarea name="description"><?= $product['description'] ?></textarea>
                 <p>Цена</p>
		 <input type="number" name="price" value="<?= $product['price'] ?>">
                 <br> <br>
                 <button type="submit">Обновить продукт</button>
         </form>

</body>
</html>
