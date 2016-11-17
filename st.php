<?php

echo 'ran';
global $dbc;

require("connect_db.php");
require("controllers.php");
	
	
	$p = $_POST['pass'];
	$e = $_POST['email'];
	
	list($isConnect, $data) = authenticate($dbc, $e, $p);
	//-echo $isConnect;
	if($isConnect){
	 	session_start();
	 	$_SESSION['user_id'] = $data['user_id'];
	 	$_SESSION['first_name'] = $data['first_name'];
	 	$_SESSION['last_name'] = $data['last_name'];
	 	load("admin_panel.php");


	}
	else{
		 echo '<P style=color:red>Login failed please try again.</P>' ;
	}

	?>