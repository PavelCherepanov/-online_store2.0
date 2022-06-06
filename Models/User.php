<?php

class User{
    
    public $name;
    public $password;
  
    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
    }
    
    public function login(){
        
        $sql = "SELECT password FROM users WHERE name = :name";
        
        // $c = new ConnectDB("localhost", "estore", "root", "");
        // $db = $c->connect();
        include "config.php";
        $chk_login = $db->prepare($sql);
        $chk_login->bindValue(":name", $this->name);
        $chk_login->execute();
        $row = $chk_login->fetch(PDO::FETCH_ASSOC);
        
        if(count($row) > 0){
            $isPassword = password_verify($this->password, $row['password']);
        }
        else {
            header("Location: index.php");
        }
        
        if(!$isPassword){
            header("Location: index.php");
        }else{   
            $_SESSION['login'] = 'on';
            $_SESSION['name'] = $this->name;
        
            header("Location: admin.php");
        }
    }

    public function registration(){
        $sql = "SELECT COUNT(name) AS c FROM users WHERE name = :name;";
        include "config.php";
        $chk_login= $db->prepare($sql);
        $chk_login->bindValue(":name", $this->name);
        $chk_login->execute();
        $row = $chk_login->fetch(PDO::FETCH_ASSOC);
        if($row['c']>0){
            echo "<p>Такой пользователь существует</p>"; 
        }
        else {
            $password = password_hash($this->password, PASSWORD_BCRYPT, array("cost" => 10));// алгоритмическая базовая стоимость
            
            $sql = "INSERT INTO users (name, password) VALUES(:name, :password);";
            
            $reg = $db->prepare($sql);
            $reg->bindValue(":name", $this->name);
            $reg->bindValue(":password", $password);
            $reg->execute();
            if($reg){   
                header("Location: login.php");
            }
        }
    }

}

?>

