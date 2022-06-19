<?php 
	$pageTitle = "Продукт";
	require_once("config.php");
?>
<?php include("./templates/head.php");?>
<?php include("templates/header.php");?>
<?php include("templates/categories.php");?>
				
<div class="container">

    <?php

        $currentProductId = intval($_GET["productId"]);
        $sql = "SELECT * FROM products WHERE id = '$currentProductId'";
        $result = $db->query($sql);
        $product = $result->fetch(PDO::FETCH_ASSOC);
    ?>

    <p><h1><?php echo $product["title"]; ?></h1></p>
    
    <p style="text-align: center"><img src="img/products/<?php echo $product["img"]; ?>" alt="" ></p>

    <h3><?php echo $product["price"]; ?> руб<h3>
    <p>
       <button type="button" class="btn btn-outline-success"><a href="order.php?id=<?php echo $product["id"]; ?>">Сделать заказ</a></button>
    </p>
    <p>
        <?php echo $product["description"]; ?>
    </p>
</div>
							

<?php include("templates/footer.php");?>