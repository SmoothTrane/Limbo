<?php
require("connect_db.php");
require("controllers.php");



	if($_SERVER['REQUEST_METHOD'] == 'POST'){
    	$item = trim($_POST["item"]);
    	searchItems($item); 
	}

?>