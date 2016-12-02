<?php
    session_start();
    require("connect_db.php");
    require("quickLinkPage.php");
    require("controllers.php");
    if(!isset($_SESSION['user_id']) && $_SESSION['role'] == 'user' ){
        load();
    }
   
$stuff = getAllStuff();





// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     echo 'test!!!!!!!!!!!!!!!!!!!!!!!!!';
// }


?>






<div class="item-pane">
     <div class="card-title item-title">
 <h1>Items</h1>
 </div>
<div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="What you looking for?">
</div>
<span class="counter pull-right"></span>
<table class="table">
  <thead>
     <tr>
      <th>ID</th>
    <th>Location ID</th>
    <th>Create Date </th>
    <th>Update Date</th>
    <th>Room </th>
    <th>Owner</th>
    <th>Finder</th>
    <th>Description</th>
    <th>Status </th>
    <th>Del</th>
    <th>Found</th>
    <th>Lost</th>
    <th>Claimed</th>
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead>
  <tbody>

<?php
if($stuff){

    
    
    while($row = mysqli_fetch_array($stuff, MYSQLI_ASSOC)){
    	echo '<tr class="admin-row">';
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
    	echo '</tbody>';
    	
    }

    echo '</table>';
    	echo '</div>';
}
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