<?php
	require_once("config.php");
	
	$pageTitle = "Главная страница";
?>

<?php include("./templates/head.php");?>
    
<?php include("./templates/header.php");?>

<main>

<?php include("./templates/categories.php");?>

  <div class="album py-5 bg-light">
    <div class="container">

      <div id="indexMain" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
        
                    <?php
						
						if(isset($_GET["categoryId"])){
							$categoryName = $_GET['categoryId'];
							$sql = "SELECT * FROM products INNER JOIN categories ON products.category = categoryId WHERE category = :category";
							
        					
							$stmt = $db->prepare($sql);
							$stmt->bindValue(":category", $_GET['categoryId']);
							$stmt->execute();
							$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
						}else{
							$sql = "SELECT * FROM products INNER JOIN categories ON products.category = categoryId";
							
        					
							$result = $db->query($sql);
							$products = $result->fetchAll(PDO::FETCH_ASSOC);
						}

						

						foreach ($products as $product){
						
							include("./templates/product-item.php");

						}
						
					?>
        
        
      </div>
    </div>
  </div>

</main>


<?php include("templates/footer.php");?>







