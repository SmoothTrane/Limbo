<?php
require("connect_db.php");
require("controllers.php");



	if($_SERVER['REQUEST_METHOD'] == 'POST'){
    	$item = $_POST["item"];
    	searchItems($item); 
	}

?>