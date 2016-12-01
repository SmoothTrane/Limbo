<!DOCTYPE html>
<html>
<head>
 <h1> update found stuff</h1>   

</head>

<?php
    require("connect_db.php");
    require("controllers.php");
    
    if ($_server['REQUEST_METHOD']=='POST'){
        $selectedId=$_POST['selectedId'];
        $updateItems = getRecordsByField("stuff","id",$selectedId);
        
}
else{
  $foundItems = getRecordsByField("stuff", "status", "found");
  
}
?>

    
<body>
<!--    <table align="center" border="0">
<tr>
<td>id:</td><td><input type="text" name="id"></td>
</tr>
<tr>
<td>status:</td><td><input type="text" name="status"> </td>
</tr>
</table>
<p><input type="submit" value="Add"/></p>-->
<form method="post" action="#">
<select name="selectedId">
    <?php if($foundItems){
        while($row = mysqli_fetch_array($foundItems, MYSQLI_ASSOC)){ 
    ?>
        <option value=<?php echo $row['id']; ?>><?php echo $row['description']; ?></option>
    <?php
        }
    }
    ?>
</select>
<button type="submit">Update</button>
</form>
<?php if($updateItems) { ?>
<form>
    <div><?php echo $updateItems[0]['id'] ?></div>
    <div><?php echo $updateItems[0]['description'] ?></div>
    <div><?php echo $updateItems[0][''] ?></div>
    <div><?php echo $updateItems[0]['id'] ?></div>

</form>
<?php } ?>
</body>
</html>
