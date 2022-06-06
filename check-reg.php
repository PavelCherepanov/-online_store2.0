<?php
  include "Models/User.php";
  
  if(isset($_POST["name"]) && isset($_POST["password"])){
    $name = trim(htmlspecialchars($_POST["name"]));
    $password = trim(htmlspecialchars($_POST["password"]));
  
    $user = new User($name, $password);

    $user->registration();    
  }
  

?>