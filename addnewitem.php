<!DOCTYPE html>
<html>


<?php
    require("connect_db.php");
    require("controllers.php");
    require("quickLinkPage.php");
    

    if ($_SERVER['REQUEST_METHOD']=='POST')

    {
        
        # addStuff("301", "Joe Mark", "Lost", "Gold iPhone 6");
        $room=trim($_POST["room"]);
        $owner=trim($_POST["owner"]);
        $description=trim($_POST["description"]);

        if(!empty($room) && !empty($owner) && !empty($description)){
            addStuff($room, $owner, 'Found', $description);
            echo '<p> Sucessful! <p>';
        }
        else{
            echo '<p> Please complete the required fields! </p>';    
        }

    }
?>



      

<div class="add-item-container">
  <div class="card form-card">
    <div class="card-title"><h2> Add new item </h2>   <span id="title-text"> </span></div>
      <div class="card-content">
          <div class="radio-wrapper">
              <button type="button" class="btn  select switch-btn">Found</button>
              <button type="button" class="btn  switch-btn">Lost</button>
            </div>
        
 <form action="addnewfounditem.php" class="add-form" method="POST">
    
<div class="form-group form-content">
        <label for="input-room">Room</label>
        <input type="text" class="form-control" name="room">    
        </div>
     <div class="form-group form-content">
        <label for="input-owner">Owner</label>
        <input type="text" class="form-control" name="owner">
    </div>
    
    <div class="form-group form-content">
        <label for="input-description">Description</label>
        <textarea   name="description" class="form-control" required> </textarea>
    </div>
    
    
   
    
  
    <button type="submit" class="btn add-btn ">Submit</button>

    </form>



        
    </div>
           
  </div>

  
        
<!--        <form>-->
    
<!--</form>-->

   




</body>    

</html>