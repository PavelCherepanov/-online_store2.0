<?php 
	$pageTitle = "Вход";
	//require_once("config.php");
?>
<?php include("./templates/head.php");?>
<?php include("./templates/header.php");?>

<div class="container">
			<h2>Вход</h2>
			<form action="check-login.php" method="POST">
				<div class="form-group">
					<input name="name" type="text" class="form-control" placeholder="login">
				</div>
                <br>
				<div class="form-group">
					<input name="password" type="password" class="form-control" placeholder="Пароль">
				</div>
                <br>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Войти</button>
				</div>
			</form>
			<p class="text-center"><a href="index.php" class="text-secondary">Вернуться назад</a></p>
			<p class="text-center"><a href="registration.php" class="text-secondary">Зарегистрироваться</a></p>
		
</div>

<?php include("templates/footer.php");?>