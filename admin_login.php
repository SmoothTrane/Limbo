<?php 
session_start();
global $dbc;

require("connect_db.php");
require("controllers.php");


if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	
	$p = $_POST['pass'];
	$e = $_POST['email'];

	 list($isConnect, $data) = authenticate($e, $p);
	
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
	mysqli_close($dbc);

}
?>
<!DOCTYPE html>
<html>

<h1> Admin Login
</h1>


<form action="admin_login.php" method="POST">
<table>
<tr>
<td>Email:</td><td><input type="text" name="email"></td>
<td>Pass:</td><td><input type="password" name="pass"></td>

</tr>
</table>
<p><input type="submit" value="Submit"></p>
</form>

</html>

<script>



</script>