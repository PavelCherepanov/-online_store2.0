<?php
include "DataBase.php";
class Product{
    
    private $title;
    private $price;
    private $description;
    private $img;
    private $category;
    private $sale;
    private $new;
  
    // public function __construct($title, $price, $description, $img, $category, $sale, $new)
    // {
    //     $this->title = $title;
    //     $this->price = $price;
    //     $this->description = $description;
    //     $this->img = $img;
    //     $this->category = $category;
    //     $this->sale = $sale;
    //     $this->new = $new;
    // }


    public function add($title, $price, $description, $fileName, $category, $sale, $new){
        
        
        $sql = "INSERT INTO products (title, price, description, img, category, sale, new) VALUES(:title, :price, :description, :img, :category, :sale, :new);";

        $data_base = new DataBase('localhost','d95058y2_db', "root", "root");
        $db = $data_base->connect();

        $stmt = $db->prepare($sql);
        $stmt->bindValue(":title", $title);
        $stmt->bindValue(":price", $price);
        $stmt->bindValue(":description", $description);
        $stmt->bindValue(":img", $fileName);
        $stmt->bindValue(":category", $category);
        $stmt->bindValue(":sale", $sale);
        $stmt->bindValue(":new", $new);
        
        $stmt->execute();
        
    }

    public function update($id, $title, $price, $description, $fileName, $category, $sale, $new){
        
        $sql = "UPDATE products SET title = :title, price = :price, description = :description, img = :img, category = :category, sale = :sale,new=:new WHERE id = :id; ";

        $data_base = new DataBase('localhost','d95058y2_db', "root", "root");
        $db = $data_base->connect();

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
        $data_base = new DataBase('localhost','d95058y2_db', "root", "root");
        $db = $data_base->connect();

        $sql = "DELETE FROM products WHERE id = :id;";
        $stmt = $db->prepare($sql);
        
        $stmt->bindValue(":id", $id);
        $stmt->execute();
    }
}

?>