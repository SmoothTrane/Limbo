<?php 
session_start();
require("connect_db.php");
require("quickLinkPage.php");
require("controllers.php");

$admins = getAllAdmins();


if ($_SERVER['REQUEST_METHOD']=='POST')

    {

        
        // # addStuff("joe", "mark", "joemark@marist.edu","admin");
        $pass = trim($_POST["pass"]);
        $id = trim($_POST['id']);
        change_password($id,$pass);
        
        
     

     
    }


?>



<div class="add-item-container">
  <div class="card form-card">
    <div class="card-title"><h2> Change Admin Password</h2>   <span id="title-text"> </span></div>
      <div class="card-content">
         
        
 <form action="changeadminpassword.php" class="change-password limbo-form" method="POST">
     
     
      <div class="form-group">
        <label for="input-admins">Admins</label>
        <br/>
    <div class=" ">
          <select id="" class="" name="id"> Select Role
            <?php
            if($admins){
            
                while($row = mysqli_fetch_array($admins, MYSQLI_ASSOC)){
                	echo '<option value="' .$row['user_id']. '">' .$row['email'] . '</option>';
            
                }
                
            }
    
    ?>

          
          </select>
          </div>
       
      
        
        <div class="form-group form-content">
            <label for="input-pass">New Password</label>
            <input type="password" id="input-pass" name="pass" class="form-input" required>  </input>
        </div>
        
       
    </div>
        
          
      
        <button type="submit" class="btn add-btn ">Add</button>

    </form>




    </div>
           
  </div>

  
        
<!--        <form>-->
    
<!--</form>-->

   




</body>    

<script>
    
    $(function(){
        
        
         $(".change-password").submit(function(e){
            e.preventDefault();
            var form = $(this);
            var formData = form.serialize();

       $.ajax({
        
        
        url:"changeadminpassword.php",
      type:"post",
      data: formData,
      dataType: "text",
      success: function (){
          $(".change-password")[0].reset();
      }
        
        
    });
    
    
  });
    
    
});

        
    // });
    
    
</script>

</html>