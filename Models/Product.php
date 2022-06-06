<?php

class Product{
    
    public $title;
    public $price;
    public $description;
    public $img;
    public $category;
    public $sale;
    public $new;
  
    // public function __construct($name, $password)
    // {
    //     $this->title = $title;
    //     $this->price = $price;
    //     $this->description = $description;
    //     $this->img = $img;
    //     $this->category = $category;
    //     $this->sale = $sale;
    //     $this->new = $new;
    // }

    public function add($title, $price, $description, $filename, $category, $sale, $new){
        include "config.php";

        $sql = "INSERT INTO products (title, price, description, img, category, sale, new) VALUES(:title, :price, :description, :img, :category, :sale, :new) ";

        
        $stmt = $db->prepare($sql);
        $stmt->bindValue(":title", $title);
        $stmt->bindValue(":price", $price);
        $stmt->bindValue(":description", $description);
        $stmt->bindValue(":img", $fileName);
        $stmt->bindValue(":category", $category);
        $stmt->bindValue(":sale", $sale);
        $stmt->bindValue(":new", $new);
        echo $sql;
        if($stmt->execute()){
            echo "win";
        }
    }

    public function update($id, $title, $price, $description, $filename, $category, $sale, $new){
        include "config.php";
        $sql = "UPDATE products SET title = :title, price = :price, description = :description, img = :img, category = :category, sale = :sale,new=:new WHERE id = :id; ";

        $stmt = $db->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->bindValue(":title", $title);
        $stmt->bindValue(":price", $price);
        $stmt->bindValue(":description", $description);
        $stmt->bindValue(":img", $fileName);
        $stmt->bindValue(":category", $category);
        $stmt->bindValue(":sale", $sale);
        $stmt->bindValue(":new", $new);

        $stmt->execute();
    }

    public function delete($id){
        include "config.php";

        $sql = "DELETE FROM products WHERE id = :id;";
        $stmt = $db->prepare($sql);
        
        $stmt->bindValue(":id", $id);
        $stmt->execute();
    }
}

?>