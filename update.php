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

print_r($_FILE);
echo $_FILE["img"]["name"];

echo $_FILE["img"]["tmp_name"];


if (isset($_FILES["img"]) && $_FILES["img"]["tmp_name"] != ""){
	move_uploaded_file($_FILES["img"]["tmp_name"], "./img/products/".$_FILES["img"]["name"]);
	$fileName = $_FILES["img"]["name"];
}else {
	$fileName = "nophoto.jpg";
}

$product = new Product();
$product->update($id, $title, $price, $description, $fileName, $category, $sale, $new);



header("Location: index.php");
?>

