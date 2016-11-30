<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<?php
    require("connect_db.php");
    require("controllers.php");
    require("quickLinkPage.php");
    if(!isset($_SESSION['user_id'])){
        echo 'california';

        load();
    }
   
$stuff = getAllStuff();
if($stuff){
    echo '<h1>Items </h1>';
    echo '<table class="table panel-table">';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Location ID</th>';
    echo '<th>Create Date </th>';
    echo '<th>Update Date</th>';
    echo '<th>Room </th>';
    echo '<th>Owner</th>';
    echo '<th>Finder</th>';
    echo '<th>Description</th>';
    echo '<th>Status </th>';
    echo '<th>Del</th>';
    echo '<th>Found</th>';
    echo '<th>Lost</th>';
    echo '<th>Claimed</th>';
    echo '</tr>';
    
    
    while($row = mysqli_fetch_array($stuff, MYSQLI_ASSOC)){
    	echo '<tr>';
    	echo '<td class="id">' .$row['id'] . '</td>';
    	echo '<td>' .$row['location_id'] . '</td>';
    	echo '<td>' .$row['create_date'] . '</td>';
    	echo '<td>' .$row['update_date'] . '</td>';
    	echo '<td>' .$row['room'] . '</td>';
    	echo '<td>' .$row['owner'] . '</td>';
    	echo '<td>' .$row['finder'] . '</td>';
        echo '<td>' .$row['description'] . '</td>';
    	echo '<td class="status">' .$row['status'] . '</td>';
        echo '<td> <span class="glyphicon glyphicon-remove del"> </td>';
        echo '<td class = "found setStatus"> SET FOUND </td>';
        echo '<td class="lost setStatus"> SET LOST</td>';
        echo '<td class="claimed setStatus"> SET CLAIMED </td>';
    	echo '</tr>';
    }
    echo '</table>';
    
}
// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     echo 'test!!!!!!!!!!!!!!!!!!!!!!!!!';
// }


?>








<script>
$(".del").click(function(){
    var row = $(this).closest("tr");
    var rowId = row.children(".id")[0].innerHTML;

  $.ajax({
        url: "deleteItem.php",
        type: "post",
        data: {id: rowId
        },
        dataType: "text",
        success: function () {
           row.remove();         

        },
        error: function(jqXHR, textStatus, errorThrown) {
           alert("Error Try again!");
        }




});

});

$(".lost").click(function(){
var row = $(this).closest("tr");
var rowId = row.children(".id")[0].innerHTML;
row.children(".status")[0].innerHTML = "lost";

  $.ajax({
        url: "editItem.php",
        type: "post",
        data: {id: rowId,
            status: "lost"
        },
        dataType: "text",
        success: function () {
             

        },
        error: function(jqXHR, textStatus, errorThrown) {
           alert("Error, try again!!");
        }




});
});

$(".found").click(function(){
    var row = $(this).closest("tr");
    var rowId = row.children(".id")[0].innerHTML;
    row.children(".status")[0].innerHTML = "found";

  $.ajax({
        url: "editItem.php",
        type: "post",
        data: {id: rowId,
            status: "found"
        },
        dataType: "text",
        success: function () {
                 
        }
    });
});


$(".claimed").click(function(){
var row = $(this).closest("tr");
var rowId = row.children(".id")[0].innerHTML;
row.children(".status")[0].innerHTML = "claimed";
  $.ajax({
        url: "editItem.php",
        type: "post",
        data: {id: rowId,
            status: "claimed"
        },
        dataType: "text",
        success: function () {
           

        },
        error: function(jqXHR, textStatus, errorThrown) {
           alert("Error, try again!!");
        }




});
});
</script>
</html>