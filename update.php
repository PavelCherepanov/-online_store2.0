<?php include "Models/Product.php"; ?>
<?php 

if (isset($_SESSION['login']) && $_SESSION['login'] == 'on') {	
}else {
	header("Location: index.php");
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
	$fileName = "img/nophoto.png";
}

$id = htmlspecialchars($_POST['id']);
$title = htmlspecialchars($_POST['title']);
$price = htmlspecialchars($_POST['price']);
$description = htmlspecialchars($_POST['description']);
$category = $_POST['category'];


$product = new Product();
$product->update($id, $title, $price, $description, $fileName, $category, $sale, $new);



header("Location: index.php");
?>

