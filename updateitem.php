<?php
//the code below calls on the updateitem function
    require("connect_db.php");
    require("controllers.php");
    if ($_SERVER['REQUEST_METHOD']=='POST'){
    echo 'ran';
            $room = trim($_POST["room"]);
        $owner = trim($_POST["owner"]);
        $description = trim($_POST["description"]);
        $status = trim($_POST["status"]);
        $finder = trim($_POST["finder"]);
        $locationId = trim($_POST["location"]);
        $owner = trim($_POST["owner"]);
        $id = trim($_POST["id"]);
        updateItem($id,$description,$room,$owner,$finder,$status,$locationId);
        

            //addStuff($room, $owner, $finder, $status, $description, $locationId);
    }
    
  x  
?>
