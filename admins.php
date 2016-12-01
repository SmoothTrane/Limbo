<?php
session_start();
require("connect_db.php");
require("controllers.php");
require("quickLinkPage.php");

$admins = getAllAdmins();

?>

<div class="item-pane">
     <div class="card-title item-title">
 <h1>Admins</h1>
 </div>
<div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="What you looking for?">
</div>
<span class="counter pull-right"></span>
<table class="table">
  <thead>
     <tr>
      <th>ID</th>
    <th>First Name</th>
    <th>Last Name </th>
    <th>Email</th>
    <th>Role</th>
    <th>Del</th>
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead>
  <tbody>

<?php
if($admins){

    
    
    while($row = mysqli_fetch_array($admins, MYSQLI_ASSOC)){
    	echo '<tr>';
    	echo '<td class="id">' .$row['user_id'] . '</td>';
    	echo '<td>' .$row['first_name'] . '</td>';
    	echo '<td>' .$row['last_name'] . '</td>';
    	echo '<td>' .$row['email'] . '</td>';
    	echo '<td>' .$row['role'] . '</td>';
        echo '<td> <span class="glyphicon glyphicon-remove del"> </td>';
    	echo '</tr>';
    	
    }

    
}
?>



<script>
    $(".del").click(function(){
    var row = $(this).closest("tr");
    var rowId = row.children(".id")[0].innerHTML;

  $.ajax({
        url: "deleteAdmin.php",
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
    
    
</script>


