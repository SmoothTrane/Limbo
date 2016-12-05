<?php
session_start();
require("connect_db.php");
require("controllers.php");
require("quickLinkPage.php");
 if(!isset($_SESSION['user_id'])){
     

        load();
    }
   
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
    	echo '<td class="fname">' .$row['first_name'] . '</td>';
    	echo '<td class="lname">' .$row['last_name'] . '</td>';
    	echo '<td class= "email">' .$row['email'] . '</td>';
    	echo '<td class="role">' .$row['role'] . '</td>';
        echo '<td> <span class="glyphicon glyphicon-remove del"> </td>';
    	echo '</tr>';
    	
    }
echo "</table>";
    
}
?>



<div id="main-container">

      <div class="content">
        
        <form action="" class="add-admin admin-form limbo-form" method="POST">
                  <span class="remove glyphicon glyphicon-remove"></span>

          <h1>Update Admin</h1>
          
     
   <div class="form-group form-content">
            
        
       
        
         <div class="form-group form-content">
            <label for="input-first_name">First Name</label>
            <input id="input-first_name" type="text" class="" name="first_name">
        </div>
         
         
         <div class="form-group form-content">
            <label for="input-last_name">Last Name</label>
            <input id="input-last_name" type="text" class="" name="last_name">
        </div>
        <div class="form-group form-content">
            <label for="input-email">Email</label>
            <input id="input-email" type="text" class="" name="email">
        </div>
         
         <div class="form-group">
        <label for="input-role">Role</label>
        <br/>
         <div class=" ">
          <select id="" class="input-role" name="role"> Select Role
            <option value="admin">Admin</option>
            <option value="superadmin">Super Admin</option>
            <option value="user">User</option>
          
          </select>
          </div>
         
        <input id="input-id" type="hidden" class="" name="id">

      
      
        <button type="submit" class="btn add-btn ">Add</button>
    </form>
    
        
        
        
        <h2></h2>


        
    </div>
           
  </div>
  

<script>
$(function(){
    
    


 $('.admin-row').click(function(){
    var row = $(this);
      $('tr').css('background-color', 'white');
      row.css('background-color', '#D2D7D3');
      
        $("#main-container").fadeIn(function(){
            var form = $(".limbo-form");
            var id = row.children(".id").text();
            form.find("#input-id").val(id);

         var firstName = row.children(".fname").text();
         form.find("#input-first_name").val(firstName);
         var lastName = row.children(".lname").text();
         form.find("#input-last_name").val(lastName);
         var role = row.children(".role").text();
         form.find(".input-role").val(role);
         var email = row.children(".email").text();
         form.find('#input-email').val(email);
    //  card.find("h2").text(desc);
    //  card.find("#title-text").text(finder);
     
   
     //TODO UPDATE CARD WITH TABLE INFORMATION
    });
  
});




 $(".admin-form").submit(function(e){
    e.preventDefault();
    var form = $(this);
    var formData = form.serialize();

    console.log(formData);
    $.ajax({
        
        
        url:"updateuser.php",
      type:"post",
      data: formData,
      dataType: "text",
      success: function (){
       $(".admin-form")[0].reset();
      }
        
        
    });
    
    
    
  });











    $(".del").click(function(e){
        e.stopPropagation();
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
    
});
</script>


