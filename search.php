
<?php
    require_once("config.php");
    // include("./templates/head.php");
    // include("./templates/header.php");
?>
<!-- <div class="album py-5 bg-light">
    <div class="container"> -->

      <!-- <div id=result class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"> -->
<?php 
    
    $query = strtolower(trim($_GET["search"]));
    // if(isset($_POST["search"])){
        $sql = "SELECT * FROM products INNER JOIN categories ON products.category = categoryId WHERE LOWER(title) LIKE '%".$query."%'";
        $result = $db->query($sql);
        $products = $result->fetchAll(PDO::FETCH_ASSOC);
        foreach ($products as $product){                    
            include("./templates/product-item.php");
        }
    // }
    // else{
    //     echo "<h2>Пусто</h2>";
    // }
    

   
?>

<!-- </div> -->

<!-- </div>
</div> -->
 <?php
 //include("./templates/footer.php");
?>
