<?php
session_start();
ob_start();

?>
<!DOCTYPE html>
<html>
<head>

<script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<title> Limbo </title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel = "stylesheet" href="assets/style.css">
<script src = "assets/script.js"> </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<!--<div>Icons made by <a href="http://www.flaticon.com/authors/pixel-buddha" title="Pixel Buddha">Pixel Buddha</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>-->
</head>





<body>

<nav class="navbar navbar-default main-nav">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      
<li><a href="/"><span id="home">Limbo</a> </span></li>
 <?php
    if(isset($_SESSION['user_id'])){
     

        echo '<li><a href="/admin_panel.php">Admin Item Panel </a></li>';
        echo '<li><a href="/admins.php">Admins Panel</a></li>';

    }
    else{
      echo '<li><a href="/admin_login.php">Admin Login </a></li>';
    }
    ?>
<li><a href="/lostItems.php">Lost Items</a></li>
<li><a href="/foundItems.php">Found Items</a></li>
<li><a href="/addnewitem.php">New Item</a></li>

  
    
   
    
    </ul>

  </div>
</nav>
</body>
</html>