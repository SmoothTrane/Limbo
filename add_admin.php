<?php
session_start();
require('controllers.php');
require('connect_db.php');
require("quickLinkPage.php");

?>



 


<div class="add-item-container">
  <div class="card form-card">
    <div class="card-title"><h2> Add Admin </h2>   <span id="title-text"> </span></div>
      <div class="card-content">
         
        
 <form action="addnewfounditem.php" class="add-form found-form" method="POST">
     
     <div class="form-group form-content">
            <label for="input-first_name">First Name</label>
            <input id="input-first_name" type="text" class="form-input" name="first_name" required>
        </div>
        
       
       <div class="form-group form-content">
            <label for="input-last_name">Last Name</label>
            <input id="input-last_name" type="text" class="form-inpit" name="last_name" required>
        </div>
        
        
    
    <div class="form-group form-content">
            <label for="input-email">Email</label>
            <input id="input-email" type="text" class="form-input" name="email" required>    
            </div>
        
        
        <div class="form-group form-content">
            <label for="input-description">Pass</label>
            <textarea   id="input-pass" name="pass" class="form-input" required>  </textarea>
        </div>
        
        <div class="form-group">
        <label for="input-location">Role</label>
        <br/>
    <div class=" ">
          <select id="" class="" name="role"> Select Role
            <option value="1">Admin</option>
            <option value="2">Super Admin</option>
            <option value="3">User</option>
          
          </select>
          </div>
    </div>
        
          
      
        <button type="submit" class="btn add-btn ">Add</button>

    </form>




    </div>
           
  </div>

  
        
<!--        <form>-->
    
<!--</form>-->

   




</body>    

</html>