
<?php
	require("connect_db.php");
	require("controllers.php");

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		deleteUser($_POST['id']);
	}
?>