<?php
	require_once("config.php");
	$pageTitle = "Сделать заказ";
?>

<?php include("./templates/head.php");?>

<?php include("./templates/header.php");?>
			
<?php include("./templates/header.php");?>
<div class="container">


		<h1>Сделать заказ</h1>

	<?php

		$currentProductId = intval($_GET["id"]);
		$sql = "SELECT * FROM products WHERE id = $currentProductId";
		$result = $db->query($sql);
		$product = $result->fetch(PDO::FETCH_ASSOC);
	?>

	<div>
		<div>
			<img src="img/products/<?php echo $product["img"]; ?>">
		</div>
		
			<h4><?php echo $product["title"]; ?></h4>
			<div ><?php echo $product["price"]; ?></div>
		
	</div>

	<form action="mail.php" method="POST">
		<div class="form-group">
			<input name="username" type="text" class="form-control" placeholder="Имя и Фамилия">
		</div>
		<div class="form-group">
			<input name="phone" type="text" class="form-control" placeholder="Телефон">
		</div>
		<div class="form-group">
			<input name="email" type="email" class="form-control" placeholder="Email">
		</div>
		<div class="form-group">
			<input name="address" type="text" class="form-control" placeholder="Адрес">
		</div>
		<input name="productTitle" type="hidden" class="form-control" value="<?php $product["title"] ?>">
		<input name="productId" type="hidden" class="form-control" value="<?php $product["id"] ?>">
		<input name="productPrice" type="hidden" class="form-control" value="<?php $product["price"] ?>">

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Оформить заказ</button>
		</div>
	</form>

</div>				

<?php include("./templates/footer.php");?>
