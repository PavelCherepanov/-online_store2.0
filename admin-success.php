<?php 
	require_once("config.php");

	if (isset($_SESSION['login']) && $_SESSION['login'] == 'on') {	
	}else {
		header("Location: index.php");
	}

	$pageTitle = "Товар добавлен успешно";
?>

	<?php include('./templates/head.php'); ?>
	<?php include('./templates/header.php'); ?>
<div class="container">
		
	<div class="text-success"><h3>Товар успешно добавлен</h3></div>
	<br>
	<a href="admin.php" class="btn btn-secondary">Добавить еще один</a>
	<a href="index.php" class="btn btn-secondary">Вернуться на главную</a>
		
</div>


<?php include('./templates/footer.php'); ?>