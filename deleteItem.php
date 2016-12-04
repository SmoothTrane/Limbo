<?php
//the code below calls on the deleteitem function
	require("connect_db.php");
	require("controllers.php");

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		deleteStuff($_POST['id']);
	}
?>