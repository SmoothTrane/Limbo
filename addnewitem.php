<!DOCTYPE html>
<html>


<?php
    require("connect_db.php");
    require("controllers.php");
    require("quickLinkPage.php");
    

    if ($_SERVER['REQUEST_METHOD']=='POST')

    {

        
        // # addStuff("301", "Joe Mark", "Lost", "Gold iPhone 6");
        $room = trim($_POST["room"]);
        $owner = trim($_POST["owner"]);
        $description = trim($_POST["description"]);
        $status = trim($_POST["status"]);
        $finder = trim($_POST["finder"]);

            addStuff($room, $owner, $finder, $status, $description);

     
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
        
 <form action="addnewfounditem.php" class="add-form found-form" method="POST">
    
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
            <option value="volvo">Select Location</option>
            <option value="Donelly Hall">Donelly Hall</option>
            <option value="mercedes">Champagnat Hall</option>
            <option value="mercedes">Upper New</option>
            <option value="mercedes">Lower New</option>
            <option value="mercedes">Upper West</option>
            <option value="mercedes">Lower West</option>
            <option value="mercedes">Hancock Center</option>
            <option value="mercedes">Murray Student Center</option>
              <option value="mercedes">Fontaine Hall</option>





            <option value="audi">Audi</option>
          </select>
          </div>
    </div>
        
          <div class="form-group form-content">
            <label for="input-owner">Finder</label>
            <input id="input-finder" type="text" class="" name="finder" required>
        </div>
        
       
      
      
        <button type="submit" class="btn add-btn ">Add</button>

    </form>




 <form action="addnewfounditem.php" class="add-form lost-form" method="POST">
    
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
            <option value="volvo">Select Location</option>
            <option value="Donelly Hall">Donelly Hall</option>
            <option value="Champagnat Hall">Champagnat Hall</option>
            <option value="Upper New">Upper New</option>
            <option value="Lower New">Lower New</option>
            <option value="Upper West">Upper West</option>
            <option value="Lower West">Lower West</option>
            <option value="Hancock Center">Hancock Center</option>
            <option value="Murray Student Center">Murray Student Center</option>
            <option value="Fontaine Hall">Fontaine Hall</option>





            <option value="audi">Audi</option>
          </select>
          </div>
    </div>
         <div class="form-group form-content">
            <label for="input-owner">Owner</label>
            <input id="input-owner" type="text" class="" name="owner" required>
        </div>
         
       
      
      
        <button type="submit" class="btn add-btn ">Add</button>

    </form>
        
    </div>
           
  </div>

  
        
<!--        <form>-->
    
<!--</form>-->

   




</body>    

</html>