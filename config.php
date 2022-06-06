<?php


// class ConnectDB
// {
//   public $host_name;
//   public $db_name;
//   public $db_login;
//   public $db_password;
  
//   public function __construct($host_name, $db_name, $db_login, $db_password)
//   {
//     $this->host_name = $host_name;
//     $this->db_name = $db_name;
//     $this->db_login = $db_login;
//     $this->db_password = $db_password;
//     session_start();
//   }
    
//     public function connect(){
//       $db = new PDO('mysql:host='.$this->host_name.';dbname='.$this->db_name, $this->db_login, $this->db_password);
      
//       return $db;
//     }

    
// }

$db = new PDO('mysql:host=localhost;dbname=estore', "root", "");
session_start();
?>