<?php

	include "./controllers/IndexController.php";
	include "./controllers/BooksController.php";
	include "./controllers/AuthorController.php";

	if(isset($_REQUEST["controller"])){
		$class = $_REQUEST["controller"];
	}
	if(isset($_REQUEST["method"])){
		$method = $_REQUEST["method"];
	}
	if(isset($_REQUEST["id"])){
		$id = $_REQUEST["id"];
	}

	$controller = new $class();
	$controller->$method($id);

 ?>
