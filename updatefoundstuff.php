<!DOCTYPE html>
<html>
<head>
 <h1> update found stuff</h1>   

</head>

<?php
    require("connect_db.php");
    require("controllers.php");
    if ($_server['REQUEST_METHOD']=='POST'){
    



$id=$_POST["id"];
$status=$_POST["status"];

}
?>

    
<body>
    <table align="center" border="0">
<tr>
<td>id:</td><td><input type="text" name="id"></td>
</tr>
<tr>
<td>status:</td><td><input type="text" name="status"> </td>
</tr>
</table>
<p><input type="submit" value="Add"></p>


</body>    

