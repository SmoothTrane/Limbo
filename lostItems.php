
<?php
require('controllers.php');
require('connect_db.php');
require("quickLinkPage.php");
$foundItems = getRecordsByField("stuff", "status", "lost");

if($foundItems){
    echo '<h1>Lost Items </h1>';
    echo '<table class ="table">';
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
    	echo '<td>' .$row['id'] . '</td>';
    	echo '<td>' .$row['location_id'] . '</td>';
    	echo '<td>' .$row['description'] . '</td>';
    	echo '<td>' .$row['create_date'] . '</td>';
    	echo '<td>' .$row['update_date'] . '</td>';
    	echo '<td>' .$row['room'] . '</td>';
    	echo '<td>' .$row['owner'] . '</td>';
    	echo '<td>' .$row['finder'] . '</td>';
    	echo '</tr>';
    }
    echo '</table>';
    
}



?>



<div id="main-container">
  <div class="card">
    <div class="card-title">Finder</div>
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