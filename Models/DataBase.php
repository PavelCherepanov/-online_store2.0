<?php

class DataBase
{
  private $host_name;
  private $db_name;
  private $db_login;
  private $db_password;
  
  public function __construct($host_name, $db_name, $db_login, $db_password)
  {
    $this->host_name = $host_name;
    $this->db_name = $db_name;
    $this->db_login = $db_login;
    $this->db_password = $db_password;
  }
    
  public function connect(){
    $db = new PDO('mysql:host='.$this->host_name.';dbname='.$this->db_name, $this->db_login, $this->db_password);
    session_start();
    return $db;
  }
}
    
?>