<?php
//the code below calls on the updateitem function
    require("connect_db.php");
    require("controllers.php");
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $owner = trim($_POST["owner"]);
        $id = trim($_POST["id"]);
        claimItem($id,$owner);
        

            //addStuff($room, $owner, $finder, $status, $description, $locationId);
    }
    
  x  
?>
