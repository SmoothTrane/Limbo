<?php
 //the code below calls on the updateuser function
    require("connect_db.php");
    require("controllers.php");
    if ($_SERVER['REQUEST_METHOD']=='POST'){
         
        $role = trim($_POST["role"]);
        $email = trim($_POST["email"]);
        $first_name = trim($_POST["first_name"]);
        $last_name = trim($_POST["last_name"]);
        $id = trim($_POST["id"]);
        updateUser($id,$first_name,$last_name,$email,$role);
        

            //addStuff($room, $owner, $finder, $status, $description, $locationId);
    }
    
    
?>
