<?php
session_start();
require("connect_db.php");
require("controllers.php");
require("quickLinkPage.php");


?>




    

        <div class="content landing-main"> 
        <div class="inner-content">
      

<h2>Discover lost and found items on Marist College campus.</h2>
    
             <!-- iPhone icon by Icons8 -->
             
              <div class="field" id="searchform">
		      <input type="text" id="searchterm" placeholder="Search for an item" />
		      <button type="button" id="search">Search</button>
		      
		      </div>
             
             <div class="two-content"> 
             <ul>
        <li><img id="iPhone" src="iphone.png"/> </li>
       <li> <img id="backpack" src="backpack.png"/> </li>
        <li> <img id="jersey" src="basketball-jersey.png"/> </li>
        </ul>
        
        </div>
     </div>
     </div>
        
     
        
        
        <div id="main-container">

      <div class="content">
        
    
    <div class="limbo-form">
        
         <span class="remove glyphicon glyphicon-remove"></span>

          <h1>Matching Items</h1>
          <table class="table">
  <thead>
     <tr>
      <th style="text-align:center">Description</th>
      
    </tr>
  </thead>
  <tbody class = "table-body">
      
      </tbody>
      
      </table>
          
    </div>
        
        
    


        
    </div>
           
  </div>

<script>
    
    
        $("#search").click(function(){
            var val = $("#searchterm").val();
     
            // User clicks on search, pane pops up and shows various items that match the query
           // Open up pane
           // AJAX get request of search query of the content
           // post the content inside the pane
           // user clicks on link, and goes to specific list found or lost and shows the item on the list
           
           
           $("#main-container").fadeIn();
           
       $.ajax({
           url:"query.php",
           method:"post",
           data:{item:val},
           dataType:"text",
           success:function(data){
               if(data !==""){
                   $(".table-body").html(data);
               }
               else{
                   $(".table-body").html("Nothing matches your search");
               }
           }
           
           
       });
           
           
           
           
           
             
            
            
        });
    
    
</script>
</body>
</html>