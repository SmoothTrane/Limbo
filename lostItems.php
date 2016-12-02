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
    	echo '<tr class="data-row lost-row">';
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
        
        <form action="updateitem.php" class="form-lost limbo-form" method="POST">
                  <span class="remove glyphicon glyphicon-remove"></span>

          <h1>Update Item</h1>
          <div class="radio-wrapper">
              <button type="button" class="btn  select switch-btn">Found</button>
              <button type="button" class="btn  switch-btn">Lost</button>
            </div>
            
     
   <div class="form-group form-content">
            <label for="input-room">Room</label>
            <input id="input-room" type="text" class="form-input" name="room" required>    
            </div>
        
        
        <div class="form-group form-content">
            <label for="input-description">Description</label>
            <textarea   id="input-desc" name="description" class="form-input" required>  </textarea>
        </div>
        
        <div class="form-group">
        <label for="input-location">Location</label>
        <br/>
    <div class=" ">
          <select id="location" class="" name="location"> Select Location
            <option value="1">McCann Arena</option>
            <option value="2">Donelly Hall</option>
            <option value="3">Champagnat Hall</option>
            <option value="4">Upper New</option>
            <option value="5">Lower New</option>
            <option value="6">Upper West Cedar</option>
            <option value="7">Lower West Cedar</option>
            <option value="8">Hancock Center</option>
            <option value="9">Murray Student Center</option>
            <option value="10">The Byrne</option>
            <option value="11">Leo Hall</option>
             <option value="12">Marian Hall</option>
             <option value="13">Sheahan Hall</option>
             <option value="14">NorthEnd</option>
             <option value="15">Dyson Center</option>
             <option value="16">Lowell Thomas</option>
             <option value="17">Upper Fulton Houses</option>
             <option value="18">Lower Fulton Houses</option>
             <option value="19">James A. Cannavino Library</option>
             <option value="20">Steel Plant</option>
             <option value="21">Saint Peter's</option>
            <option value="22">Midrise Hall</option>
            <option value="23">Foy Townhouses</option>
            <option value="24">Cornell Boathouses</option>
          </select>
          </div>
    </div>
          <div class="form-group form-content">
            <label for="input-owner">Owner</label>
            <input id="input-owner" type="text" class="" name="owner" >
        </div>
        
         <div class="form-group form-content">
            <label for="input-finder">Finder</label>
            <input id="input-finder" type="text" class="" name="finder">
        </div>
        
                    <input id="input-id" type="hidden" class="" name="id">

         
       
      
      
        <button type="submit" class="btn found-btn add-btn ">Add</button>
    </form>
    
        
        
        
        <h2></h2>


        
    </div>
           
  </div>
  
</body>

    <script>
        
        $('.lost-row').click(function(){
      var row = $(this);
      $('tr').css('background-color', 'white');
      row.css('background-color', '#D2D7D3');
      
        $("#main-container").fadeIn(function(){
            var form = $(".limbo-form");
            var id = row.children(".id").text();
            form.find("#input-id").val(id);

         var desc = row.children(".desc").text();
         form.find("#input-desc").text(desc);
         var owner = row.children(".owner").text();
         form.find("#input-owner").val(owner);
         var room = row.children(".room").text();
         form.find("#input-room").val(room);
         var lid = row.children(".lid").text();
         form.find("#location").val(lid);
          var finder = row.children(".finder").text();
         form.find("#input-finder").val(finder);
        
        //  card.find("h2").text(desc);
        //  card.find("#title-text").text(finder);
         
       
         //TODO UPDATE CARD WITH TABLE INFORMATION
        });
  
});

$(function(){
    
    $(".form-lost").submit(function(e){
    e.preventDefault();
    var form = $(this);
    var formData = form.serialize();
    var status = $(".select").text().trim().toLowerCase();
    formData+="&status="+status;
    console.log(formData);
    $.ajax({
        
        
        url:"updateitem.php",
      type:"post",
      data: formData,
      dataType: "text",
      success: function (){
       alert("true");
      }
        
        
    });
    
    
    
  });
    
    
});


  
    </script>
</html>