<?php
    session_start();
require('controllers.php');
require('connect_db.php');
require("quickLinkPage.php");

if ($_SERVER['REQUEST_METHOD']=='POST')

    {

        
        // # addStuff("joe", "mark", "joemark@marist.edu","admin");
        $fname = trim($_POST["first_name"]);
        $lname = trim($_POST["last_name"]);
        $email = trim($_POST["email"]);
        $role = trim($_POST["role"]);
        $pass = trim($_POST["pass"]);

        
        
      

        addUser($fname, $lname, $email, $role, $pass);

     
    }

?>



 


<div class="add-item-container">
  <div class="card form-card">
    <div class="card-title"><h2> Add Admin </h2>   <span id="title-text"> </span></div>
      <div class="card-content">
         
        
 <form action="add_admin.php" class="add-admin limbo-form" method="POST">
     
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
            <option value="admin">Admin</option>
            <option value="superadmin">Super Admin</option>
            <option value="user">User</option>
          
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