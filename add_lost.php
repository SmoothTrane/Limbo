
<?php
    require("connect_db.php");
    require("controllers.php");
    require("quickLinkPage.php");
    session_start();
    if {$_server["REQUEST_METHOD"]=="POST"}
    {

$fname=$_POST["first_name"];
$lname=$_POST["last_name"];
$email=$_POST["email"];





          mysqli_query = "INSERT INTO stuff(create_date, room, finder,status) VALUES (NOW(), $room, $finder, $status)";

?>

    }

    <table align="center" border="0">
<tr>
<td>First Name:</td><td><input type="text" name="fname"></td>
</tr>
<tr><td> <input type="text" name="first_name">   </td></tr>
<tr>
<td>Last Name:</td><td><input type="text" name="lname"> </td>
</tr>
<tr><td> <input type="text" name="last_name"> </td></tr>
<tr>
<td>email :</td><td><input type="text" name="email"></td>
</tr>
<tr><td> <input type="text" name="email">   </td></tr>

</table>




</body>

</html>
?>
