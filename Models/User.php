<?php
include "DataBase.php";
class User{
    
    public $name;
    public $password;
  
    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
    }
    
    

    public function login(){
        
        $sql = "SELECT password, role FROM users WHERE name = :name";

        $data_base = new DataBase('localhost','d95058y2_db', "root", "root");
        $db = $data_base->connect();
        
        $chk_login = $db->prepare($sql);
        $chk_login->bindValue(":name", $this->name);
        $chk_login->execute();
        $row = $chk_login->fetch(PDO::FETCH_ASSOC);
        if(count($row) > 0){
            $isPassword = password_verify($this->password, $row['password']);
        }
        else {
            header("Location: sites/error.php");
        }
        
        if(!$isPassword){
            header("Location: sites/error.php");
        }

        if ($isPassword && $row['role'] == 'admin'){   
            $_SESSION['login'] = 'on';
            $_SESSION['role'] = 'admin';
            $_SESSION['name'] = $this->name;
        
            header("Location: admin.php");
        } else{
            $_SESSION['login'] = 'on';
            $_SESSION['name'] = $this->name;
        
            header("Location: index.php");
        }
    }

    public function registration(){
        $sql = "SELECT COUNT(name) AS c FROM users WHERE name = :name;";
        
        $data_base = new DataBase('localhost','d95058y2_db', "root", "root");
        $db = $data_base->connect();

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

