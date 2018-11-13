<?php

class Database{
  $host = "localhost";
  $user = "root";
  $password = "";
  $database = "database";

  function __construct(){

    $conn = new mysqli($host, $user, $password);
    if($conn->connect_error){
      die("A conexão falhou: " . $conn->connect_error);
    }else{
      echo "A conexão foi estalecida com sucesso!";
    }
  }

  public function OurQuery($sql){
    $result = $conn->query($sql)
    //code

  }

  public function prepare($sql){
    //code here
  }
}

?>
