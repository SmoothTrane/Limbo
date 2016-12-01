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
    	echo '<tr class="data-row admin-row">';
    	echo '<td class="id">' .$row['user_id'] . '</td>';
    	echo '<td>' .$row['first_name'] . '</td>';
    	echo '<td>' .$row['last_name'] . '</td>';
    	echo '<td>' .$row['email'] . '</td>';
    	echo '<td>' .$row['role'] . '</td>';
        echo '<td> <span class="glyphicon glyphicon-remove del"> </td>';
    	echo '</tr>';
    	
    }
echo "</table>";
    
}
?>



<div id="main-container">

      <div class="content">
        
        <form action="" class="add-admin limbo-form" method="POST">
                  <span class="remove glyphicon glyphicon-remove"></span>

          <h1>Update Admin</h1>
          
     
   <div class="form-group form-content">
            
        
       
        
         <div class="form-group form-content">
            <label for="input-finder">First Name</label>
            <input id="input-finder" type="text" class="" name="">
        </div>
         
         
         <div class="form-group form-content">
            <label for="input-finder">Last Name</label>
            <input id="input-finder" type="text" class="" name="">
        </div>
        <div class="form-group form-content">
            <label for="input-finder">Email</label>
            <input id="input-finder" type="text" class="" name="">
        </div>
         
         <div class="form-group">
        <label for="input-location">Role</label>
        <br/>
         <div class=" ">
          <select id="" class="" name="role"> Select Role
            <option value="admin">Admin</option>
            <option value="superadmin">Super Admin</option>
            <option value="user">User</option>
          
          </select>
          </div>
         
       
      
      
        <button type="submit" class="btn add-btn ">Add</button>
    </form>
    
        
        
        
        <h2></h2>


        
    </div>
           
  </div>
  

<script>


 $('.admin-row').click(function(){
  var row = $(this);
  $('tr').css('background-color', 'white');
  row.css('background-color', '#D2D7D3');
  
    $("#main-container").fadeIn(function(){
        var form = $(".limbo-form");
      var card = $(this).children(".card");
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


