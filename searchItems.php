<?php

require("connect_db.php");
require("controllers.php");


if(isset($_GET['search'])) {
    $search = $_GET['search'];
    echo 'ran!!';

    // $stmt = $dbc->prepare("SELECT * from stuff where description  like '%$search%' or finder like '%$search%' or owner like '%$search%'");
    // $stmt -> execute(array($search));
    // echo $stmt;
    // $num = $stmt->rowCount();
}


?>