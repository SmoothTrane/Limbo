<?php
#Connnects to mySQL Database

    $host  =   getenv('IP');
  
    $username = getenv('C9_USER');
    $password = "";
    $database = "limbo_db";
    $dbport = 3306;

       $dbc = new mysqli($host, $username, $password, $database, $dbport);

    // Check connection
    if ($dbc->connect_error) {
        die("Connection failed: " . $dbc->connect_error);
    } else{
    //echo "Connected successfully (".$dbc->host_info.")<br>";
}
    $query = "SELECT * FROM USERS";
    $result = mysqli_query($dbc, $query);
    echo $result;
    
    mysqli_set_charset ($dbc, 'utf8');




?>