<?php 

include "Models/Product.php"; 

if (isset($_SESSION['login']) && $_SESSION['login'] == 'on') {	
}else {
	// header("Location: index.php");
}



if (@!$_POST["sale"]) {
	$_POST["sale"] = NULL;
}

if (@!$_POST["new"]) {
	$_POST["new"] = NULL;
}


echo $_FILE["img"]["name"];

echo $_FILE["img"]["tmp_name"];


if (isset($_FILES["img"]) && $_FILES["img"]["tmp_name"] != ""){
	move_uploaded_file($_FILES["img"]["tmp_name"], "./img/products/".$_FILES["img"]["name"]);
	$fileName = $_FILES["img"]["name"];
}else {
	$fileName = "nophoto.png";
}
	
    $title = htmlspecialchars($_POST['title']);
    $price = htmlspecialchars($_POST['price']);
	$description = htmlspecialchars($_POST['description']);
	$category = $_POST['category'];
	$sale = $_POST['sale'];
	$new = $_POST['new'];


	$product = new Product();
	$product->add($title, $price, $description, $fileName, $category, $sale, $new);
	
 	// header("Location: admin-success.php");
?>