<?php
	require("connect_db.php");
	require("controllers.php");

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		updateStuffStatus($_POST['id'], $_POST['status']);
	}
?>