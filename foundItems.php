<?php
session_start();
require('controllers.php');
require('connect_db.php');
require("quickLinkPage.php");
$foundItems = getRecordsByField("stuff", "status", "found");




?>

<div class="item-pane">
     <div class="card-title item-title">
 <h1>Found Items </h1>
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
if($foundItems){

    while($row = mysqli_fetch_array($foundItems, MYSQLI_ASSOC)){
    	echo '<tr class="data-row found-row">';
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

      <div class="content">
        
        <form action="updateitem.php" class="found-form limbo-form" method="POST">
                  <span class="remove glyphicon glyphicon-remove"></span>

          <h1>Claim Item</h1>
       
            
     
   <div class="form-group form-content">
          
          <div class="form-group form-content">
            <label for="input-owner">Owner</label>
            <input id="input-owner" type="text" class="" name="owner" >
        </div>
        
        
        
                    <input id="input-id" type="hidden" class="" name="id">

         
       
      
      
        <button type="submit" class="btn found-btn add-btn ">Update</button>
    </form>
    
        
        
        
        <h2></h2>


        
    </div>
           
  </div>
  
</body>

    <script>
        
        $('.found-row').click(function(){
      var row = $(this);
      $('tr').css('background-color', 'white');
      row.css('background-color', '#D2D7D3');
      
        $("#main-container").fadeIn(function(){
            var form = $(".limbo-form");
            var id = row.children(".id").text();
            form.find("#input-id").val(id);
    
        
        //  card.find("h2").text(desc);
        //  card.find("#title-text").text(finder);
         
       
         //TODO UPDATE CARD WITH TABLE INFORMATION
        });
  
});

$(function(){
    
    $(".found-form").submit(function(e){
    e.preventDefault();
    var form = $(this);
    var formData = form.serialize();
    console.log(formData);
    $.ajax({
        
        
        url:"claimitem.php",
      type:"post",
      data: formData,
      dataType: "text",
      success: function (){
          $(".found-form")[0].reset();
          
          $("#main-container").fadeOut();
      }
        
        
    });
    
    
    
  });
    
    
});


  
    </script>
</html>