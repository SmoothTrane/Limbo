<?php
    require("connect_db.php");
    require("controllers.php");
    require("quickLinkPage.php");
    

    if ($_SERVER['REQUEST_METHOD']=='POST')

    {

        
        // # addStuff("301", "Joe Mark", "Lost", "Gold iPhone 6");
        $room = trim($_POST["room"]);
        $owner = trim($_POST["owner"]);
        $description = trim($_POST["description"]);
        $status = trim($_POST["status"]);

          if(!empty($room) && !empty($owner) && !empty($description)){
            addStuff($room, $owner, $status, $description);
            echo '<p> Sucessful! <p>';
         }
        else{
        echo '<p> Please complete the required fields! </p>';    
        }

    }
?>