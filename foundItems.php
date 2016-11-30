
<?php
require('controllers.php');
require('connect_db.php');
require("quickLinkPage.php");
$foundItems = getRecordsByField("stuff", "status", "found");




?>

 <div class="item-pane">
   <div class="card-title item-title">
 <h1>Found Items </h1>
 </div>

 
    <table class="table table-pane">
    <tr>
    <th >ID</th>
    <th>Location ID</th>
    <th>Description</th>
    <th>Create Date </th>
    <th>Update Date</th>
    <th>Room </th>
    <th>Owner</th>
    <th>Finder</th>
    </tr>
    <?php
    if($foundItems){
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
    echo '</div>';
    
    }
    
    ?>
    
    

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