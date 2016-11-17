
<?php
require('controllers.php');
require('connect_db.php');
require("quickLinkPage.php");
$foundItems = getRecordsByField("stuff", "status", "found");

if($foundItems){
    echo '<h1>Found Items </h1>';
    echo '<table class="table">';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Location ID</th>';
    echo '<th>Description</th>';
    echo '<th>Create Date </th>';
    echo '<th>Update Date</th>';
    echo '<th>Room </th>';
    echo '<th>Owner</th>';
    echo '<th>Finder</th>';
    echo '</tr>';
    
    
 
    while($row = mysqli_fetch_array($foundItems, MYSQLI_ASSOC)){
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
    echo '</table>';
    
}


?>

<div id="main-container">
  <div class="card">
    <div class="card-title">Finder <span class="remove glyphicon glyphicon-remove"></span></div>
      <div class="card-content">
        
        <h2>Item Name</h2>
        <p>Description</p>
        

        
    </div>
            <div class="card-footer">
          <span>Location</span>
          <span>Create Date</span>
          </div>
  </div>
</body>
</html>