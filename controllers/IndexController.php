<?php
  class IndexController {

    public function index($id) {
       echo include ("./views/main.php");
       echo header("Location:main.php");
    }

    function __construct(){
      //code here


      echo "IndexController Constructor";
    }

    public function teste(){
      echo "Tá entrando aqui :)";
    }
  }

?>
