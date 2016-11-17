<?php
require("connect_db.php");
require("controllers.php");
require("quickLinkPage.php");






?>


<form>
  <div class="form-group">
    <label for="text">Finder:</label>
    <input type="text" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Room:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
   <div class="form-group">
    <label for="pwd">Description</label>
    <input type="password" class="form-control" id="pwd">
  </div>
   <div class="form-group">
    <label for="pwd">Status</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
