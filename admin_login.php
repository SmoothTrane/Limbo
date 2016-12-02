<?php 
session_start();
global $dbc;

require("connect_db.php");
require("controllers.php");
require("quickLinkPage.php");



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


<h1> Admin Login
</h1>
  

<form action="admin_login.php" class="limbo-form" method="POST">

  <div class="form-group form-content">
            <label for="input-email">Email</label>
            <input type="text" name="email" class="form-input" required>  </input>
        </div>
        
         <div class="form-group form-content">
            <label for="input-pass">Password</label>
            <input type="password" name="pass" class="form-input" required>  </input>
        </div>

<p><input type="submit" value="Submit"></p>
</form>

</html>
