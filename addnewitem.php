<?php
    session_start();
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
        $locationId = trim($_POST["location"]);
        
      

            addStuff($room, $owner, $finder, $status, $description, $locationId);

     
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
        
 <form action="addnewfounditem.php" class="add-form limbo-form found-form" method="POST">
    
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
            <label for="input-owner">Finder</label>
            <input id="input-finder" type="text" class="" name="finder" required>
        </div>
        
       
      
      
        <button type="submit" class="btn add-btn ">Add</button>

    </form>




 <form action="addnewfounditem.php" class="add-form limbo-form lost-form" method="POST">
    
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
            <option value="6">Upper Wes Cedar</option>
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