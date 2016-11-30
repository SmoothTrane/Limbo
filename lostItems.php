<?php
session_start();
require('controllers.php');
require('connect_db.php');
require("quickLinkPage.php");
$lostItems = getRecordsByField("stuff", "status", "lost");



?>

<div class="item-pane">
     <div class="card-title item-title">
 <h1>Lost Items </h1>
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
      <th>Description</th>
      <th>Create Date </th>
      <th>Update Date</th>
      <th>Room </th>
      <th>Owner</th>
      <th>Finder</th>
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead>
  <tbody>
  <?php
if($lostItems){

    while($row = mysqli_fetch_array($lostItems, MYSQLI_ASSOC)){
    	echo '<tr class="data-row">';
    	echo '<td class="id">' .$row['id'] . '</td>';
    	echo '<td class="lid">' .$row['location_id'] . '</td>';
    	echo '<td class = "desc">' .$row['description'] . '</td>';
    	echo '<td class="create">' .$row['create_date'] . '</td>';
    	echo '<td class="update">' .$row['update_date'] . '</td>';
    	echo '<td class="room">' .$row['room'] . '</td>';
    	echo '<td class="owner">' .$row['owner'] . '</td>';
    	echo '<td class="finder">' .$row['finder'] . '</td>';
    	echo '</tr>';
    }
    
}
    
    ?>
  </tbody>
</table>

</div>












<div id="main-container">
  <div class="card">
    <div class="card-title"><span id="title-text"> </span> <span class="remove glyphicon glyphicon-remove"></span></div>
      <div class="card-content">
        
        <h2></h2>


        
    </div>
            <div class="card-footer">
          <span>Create Date</span>
          </div>
  </div>
</body>
</html>