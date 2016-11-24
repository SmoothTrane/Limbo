<!DOCTYPE html>
<html>

<?php
    require("connect_db.php");
    require("controllers.php");
    require("quickLinkPage.php");

    echo '<head>
            <h1> Add new lost stuff </h1>   
        </head>';

    if ($_SERVER['REQUEST_METHOD']=='POST')

    {
        
        # addStuff("301", "Joe Mark", "Lost", "Gold iPhone 6");
        $room=trim($_POST["room"]);
        $owner=trim($_POST["owner"]);
        $description=trim($_POST["description"]);

        if(!empty($room) && !empty($owner) && !empty($description)){
            addStuff($room, $owner, 'Lost', $description);
            echo '<p> Sucessful! <p>';
        }
        else{
            echo '<p> Please complete the required fields! </p>';    
        }

    }
?>

<body>

<form action="addnewlostitem.php" method="POST">
    <table align="center" border="0">
<tr>
<td>room:</td><td><input type="text" name="room"></td>
</tr>
<tr>
<td>owner:</td><td><input type="text" name="owner"> </td>
</tr>
<tr>
<td>description</td><td><input type="text" name="description"> </td>
</tr>
<tr>
<td>
<p><input type="submit" value="Add"></p>
</td>
</tr>
</table>



</form>

</body>    

</html>