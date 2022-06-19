<?php
	require_once("config.php");
	if (isset($_SESSION['login']) && $_SESSION['login'] == 'on' ) {
		
	}else {
		header("Location: index.php");
	}

	$pageTitle = "Добавить товар";
?>

<?php

if ($_SESSION['role'] == 'admin'){
    
?>
<?php include("./templates/head.php");?>
<?php include("./templates/header.php");?>
	<div class="container">	
    <h2>Добавить товар</h2>
    <br>
    <!-- ДОБАВИТЬ ТОВАР -->
    <form action="./add-new.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <input name="title" type="text" class="form-control"  placeholder="Название">
        </div>
        <br>
        <div class="form-group">
            <select name="category" class="form-control">
                <option value="1">Телефоны</option>
                <option value="2">Планшеты</option>
                <option value="3">Ноутбуки</option>
                <option value="4">Компьютеры</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <input name="price" type="text" class="form-control" placeholder="Цена">
        </div>
        <br>
        <div class="form-check form-check-inline">
            <input name="sale" class="form-check-input" type="checkbox" id="sale" value="1">
            <label class="form-check-label" for="sale">распродажа</label>
        </div>
        <div class="form-check form-check-inline">
            <input name="new" class="form-check-input" type="checkbox" id="new" value="1">
            <label class="form-check-label" for="new">новинка</label>
        </div>

        <div class="form-group pt-3">
            <label for="img">Фото:</label>
            <input name="img" type="file" class="form-control-file" id="img">
        </div>

        <div class="form-group">
            <div class="form-group">
                <label for="description">Описание:</label>
                <textarea name="description" class="form-control" id="description" rows="3"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>
    <br>
    <!-- УДАЛИТЬ -->
    <p><h2>Удалить</h2></p>
    <form action="delete.php" method="POST">
    <div class="form-group">
        <input type="text" name="id" placeholder="id" class="form-control">
        <br>
        <button type="submit" class="btn btn-primary">Удалить</button>
    </div>
        
    </form>
    <!-- UPDATE -->
    <p><h2>Обновить</h2></p>
    <form action="update.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <div class="form-group">
        <input type="text" name="id" placeholder="id" class="form-control">
        <br>
        <input name="title" type="text" class="form-control"  placeholder="Название">
        </div>
        <br>
       
            <select name="category" class="form-control">
                <option value="1">Телефоны</option>
                <option value="2">Планшеты</option>
                <option value="3">Ноутбуки</option>
                <option value="4">Компьютеры</option>
            </select>
        
        <br>
        
            <input name="price" type="text" class="form-control" placeholder="Цена">
        </div>
        <br>
        <div class="form-check form-check-inline">
            <input name="sale" class="form-check-input" type="checkbox" id="sale" value="1">
            <label class="form-check-label" for="sale">распродажа</label>
        </div>
        <div class="form-check form-check-inline">
            <input name="new" class="form-check-input" type="checkbox" id="new" value="1">
            <label class="form-check-label" for="new">новинка</label>
        </div>

        <div class="form-group pt-3">
            <label for="img">Фото:</label>
            <input name="img" type="file" class="form-control-file" id="img">
        </div>

        <div class="form-group">
            <div class="form-group">
                <label for="description">Описание:</label>
                <textarea name="description" class="form-control" id="description" rows="3"></textarea>
            </div>
            <br>
            
        <button type="submit" class="btn btn-primary">Обновить</button>
    </div>
    </form>

</div>			
<?php include("templates/footer.php");?>

<?php
} else{
    echo "Вы не админ";
}

?>