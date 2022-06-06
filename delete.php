<?php include "Models/Product.php"; ?>
<?php 
    if(isset($_POST["id"])){
        $id = $_POST["id"];
        $product = new Product();
        $product->delete($id);
        header("Location: admin.php");
} else{
    header("Location: index.php");
}
?>